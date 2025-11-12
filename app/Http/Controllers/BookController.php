<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Language;
use App\Models\Publisher;
use App\Models\Spirit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{

    /*** ADMIN ***/
    public function index()
    {
        $books = DB::table("books")
                    ->join('books_authors','books.id','=','books_authors.book_id')
                    ->join("authors", "books_authors.author_id", "=", "authors.id")
                    ->join("publishers", "books.publisher_id", "=", "publishers.id")
                    ->join('languages', 'books.language_id', '=', "languages.id")
                    //->join('spirits', 'books.spirit_id', '=', "spirits.id")
                    ->select('books.id as book_id','title','type','edition','price','copies','condition','status',
                    'languages.name as language','publishers.name as publisher','cover_image',
                        DB::raw("GROUP_CONCAT(authors.name ORDER BY authors.name SEPARATOR ', ')  as author"))
                    ->groupBy('books.id','title','type','edition','price','copies','condition','status','language','publisher')
                    ->get();
        return view('pages._admin.library.index', compact('books'));
    }

    public function create(){
        $authors = Author::all();
        $languages = Language::where('active', 1)->get();
        $books_type = Book::distinct('type')->pluck('type');
        $publishers = Publisher::all();
        return view('pages._admin.library.create', compact('authors','languages','books_type','publishers'));
    }
    public function edit(Request $request,$id){

        $book = DB::table("books")
            ->join('books_authors','books.id','=','books_authors.book_id')
            ->join("authors", "books_authors.author_id", "=", "authors.id")
            ->join("publishers", "books.publisher_id", "=", "publishers.id")
            ->join('languages', 'books.language_id', '=', "languages.id")
            //->join('spirits', 'books.spirit_id', '=', "spirits.id")
            ->select('books.id as book_id','title','type','edition','price','copies','condition','status',
                'publishers.name as publisher','books.language_id','books.description','publisher_id','published',
                'cover_image',
                DB::raw("GROUP_CONCAT(authors.name ORDER BY authors.name SEPARATOR ', ')  as author"))
            ->where('books.id', '=', $id)
            ->groupBy('books.id')
            ->first();

        $authors_books = DB::table("books_authors")->where('book_id', '=', $id)->pluck('author_id','id')->toArray();

        $authors = Author::all();
        $languages = Language::where('active', 1)->select('id','name')->get();
        $books_type = Book::distinct('type')->pluck('type');
        $publishers = Publisher::all();

        return view('pages._admin.library.edit', compact('authors','languages','books_type','publishers','book','authors_books'));
    }

    public function store(Request $request){

        $request->validate([
            'title' => 'required|string|min:5|max:200',
            'copies' => 'required|integer|min:1|max:149',
            'file' => [
                'file',
                'image',
                'max:200', // 200KB = 200 * 1024 bytes
                function ($attribute, $value, $fail) use ($request) {
                    if ($request->hasFile('file')) {
                        $originalFilename = str_replace(' ','_',$request->file('file')->getClientOriginalName());

                        if (Storage::disk('public')->exists('images/books/' . $originalFilename)) {
                            $fail('The file already exists in the books folder.');
                        }else{
                            $file = $request->file('file');

                            // Store the file in 'public/images/books' with its original name
                            $path = $file->storeAs('public/images/books', $originalFilename);
                            $request['cover_image'] = $originalFilename; // only save the name in the DB
                        }
                    }
                },
            ],
        ]);

        if($request->get('action_type') === 'draft'){
            $request['status'] = 0;  // inactive - draft
            $book= Book::create($request->all());

            foreach ($request->get('authors') as $author_id) {
                DB::table('books_authors')->insert(['book_id' => $book->id, 'author_id' => $author_id,'created_at' => now()]);
            }
            return redirect()->back()->with('success', 'Draft saved successfully!');

        }else if($request->get('action_type') === 'save'){
            $book= Book::create($request->all());
            foreach ($request->get('authors') as $author_id) {
                DB::table('books_authors')->insert(['book_id' => $book->id, 'author_id' => $author_id,'created_at' => now()]);
            }
            return redirect()->back()->with('success', 'Book saved successfully!');

        }else{
            return redirect()->back()->with('error', 'Ops...Something went wrong! Try again some other time.');
        }
    }

    public function update(Request $request)
    {
        $book = Book::find($request->get('id'));

        if(empty($book)){
            return redirect()->back()->with('error', 'Book not found!');
        }

        $request->validate([
            'title' => 'required|string|min:5|max:200',
            'copies' => 'required|integer|min:1|max:149',
            'file' => [
                'file',
                'image',
                'max:200', // 200KB = 200 * 1024 bytes
                function ($attribute, $value, $fail) use ($request) {
                    if ($request->hasFile('file')) {
                        $originalFilename = str_replace(' ','_',$request->file('file')->getClientOriginalName());

                        if (!Storage::disk('public')->exists('images/books/' . $originalFilename)) {
                            $file = $request->file('file');

                            // Store the file in 'public/images/books' with its original name
                            $path = $file->storeAs('public/images/books', $originalFilename);
                            $request['cover_image'] = $originalFilename; // only save the name in the DB
                        }else{
                            $request['cover_image'] = $originalFilename;
                        }
                    }
                },
            ],
        ]);

        if($request->get('action_type') === 'draft'){
            $request['status'] = 0;  // inactive - draft
            $book= Book::save($request->all());  // check this//

            foreach ($request->get('authors') as $author_id) {
                DB::table('books_authors')->insert(['book_id' => $book->id, 'author_id' => $author_id,'created_at' => now()]);
            }
            return redirect()->back()->with('success', 'Draft saved successfully!');

        }else if($request->get('action_type') === 'edit'){
            $book= Book::update($request->all());
            foreach ($request->get('authors') as $author_id) {
                DB::table('books_authors')->insert(['book_id' => $request->get('id'), 'author_id' => $author_id,'created_at' => now()]);
            }
            return redirect()->back()->with('success', 'Book saved successfully!');

        }else{
            return redirect()->back()->with('error', 'Ops...Something went wrong! Try again some other time.');
        }
    }

    public function destroy($id)
    {
        try {
            DB::transaction(function () use ($id) {
                $book = Book::find($id);

                if (!empty($book->cover_image)) {
                    //check if image exist in other record
                    $cover_image = Book::where("cover_image", $book->cover_image)->count();

                    if ($cover_image = 1) {
                        // not used by other record
                        Storage::disk('public')->delete('images/books/' . $book->cover_image);
                    }
                }

                $book->delete();
                DB::table("books_authors")->where('book_id', '=', $id)->delete();


            });
            return redirect()->route('books.index')
                ->with('success', 'Book deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

//    public function show($id)
//    {
//        $post = Post::find($id);
//        return view('posts.show', compact('post'));
//    }
//



    /*** FRONT-END ***/
    public function searchQuery(Request $request)
    {
        $languages = Language::select('id','name')->where('active',true)->get();
        $publishers = Publisher::select(DB::raw('publishers.id,name,sum(books.copies) as qtd'))
            ->leftjoin('books', 'books.publisher_id', '=', "publishers.id")
            ->groupBy('publishers.id','name')
            ->orderby('name')->get();
        $spirits = Spirit::select('id','name')->orderby('name')->get();

        $language_ids = empty( $request->get('languages') ) ? [1,2,3] : $request->get('languages');
        $publisher_ids = empty( $request->get('publishers') ) ? $publishers->pluck('id') : $request->get('publishers');


        $books = DB::table("books")
            ->join("authors", "books.author_id", "=", "authors.id")
            ->join("publishers", "books.publisher_id", "=", "publishers.id")
            ->join('languages', 'books.language_id', '=', "languages.id")
            ->join('spirits', 'books.spirit_id', '=', "spirits.id")
            ->select('books.id as book_id','title','type','edition','price','copies','condition',
                'spirits.name as spirit','languages.name as language','authors.name as author','publishers.name as publisher')
            ->where('type','!=','messages.study')
            ->whereIn('languages.id', $language_ids)
            ->whereIn('publishers.id', $publisher_ids)
            //->limit(10)
            ->paginate(6);



        return redirect()->route('frontend.library', compact('books','languages','publishers','spirits'));


    }

    public function detail($id)
    {
        $book = DB::table("books")
            ->join('books_authors','books.id','=','books_authors.book_id')
            ->join("authors", "books_authors.author_id", "=", "authors.id")
            ->join("publishers", "books.publisher_id", "=", "publishers.id")
            ->join('languages', 'books.language_id', '=', "languages.id")
            //->join('spirits', 'books.spirit_id', '=', "spirits.id")
            ->select('books.id as book_id','title','type','edition','price','copies','condition','status',
                'description','languages.name as language','publishers.name as publisher','cover_image',
                DB::raw("GROUP_CONCAT(authors.name ORDER BY authors.name SEPARATOR ', ')  as author"))
            ->where('books.id', '=', $id)
            ->groupBy('books.id')
            ->first();

        $book_suggestions = Book::inRandomOrder()
                ->select(DB::raw("books.id as id,title,cover_image,
                        GROUP_CONCAT(authors.name ORDER BY authors.name SEPARATOR ', ')  as author,
                        publishers.name as publisher,languages.name as language"))
                ->join('books_authors','books.id','=','books_authors.book_id')
                ->join('authors', 'books_authors.author_id', '=', "authors.id")
                ->join("publishers", "books.publisher_id", "=", "publishers.id")
            ->join('languages', 'books.language_id', '=', "languages.id")
                ->groupBy('books.id')
                ->limit(2)->get();

        return view('pages._frontend.book-details', compact('book','book_suggestions'));
    }
    public function list(Request $request)
    {
        $books = Book::query();
        $searched_languages = [];
        $searched_publishers = [];
        $searched_authors = [];
        $search_box = '';

        // Filter by keywords (using keyword for multiple fields)
        if ($request->has('search_box') && !empty($request->get('search_box'))) {
            $books->where(function ($query)  use ($request) {
                $query->orwhere('publishers.name', 'LIKE', '%'.$request->get('search_box').'%')
                    ->orWhere('authors.name', 'LIKE', '%'.$request->get('search_box').'%')
                    ->orWhere('title', 'LIKE', '%'.$request->get('search_box').'%');

            });
            $search_box = $request->get('search_box');
        }

        // Filter by language (using an array for multiple selections)
        if ($request->has('languages') && is_array($request->get('languages'))) {
            $books->whereIn('language_id', $request->get('languages'));
            $searched_languages = $request->get('languages');
        }

        // Add other filters as needed (e.g., publishers, price range)
        if ($request->has('publishers') && is_array($request->get('publishers'))) {
            $books->whereIn('publisher_id', $request->get('publishers'));
            $searched_publishers = $request->get('publishers');
        }

        // Add other filters as needed (e.g., authors, price range)
        if ($request->has('authors') && is_array($request->get('authors'))) {
            $books->whereIn('author_id', $request->get('authors'));
            $searched_authors = $request->get('authors');
        }

        // Add other filters as needed (e.g. price range)
        if (empty($request->get('price_range_min'))) {
            $request['price_range_min'] = "0";
        }

        // Add other filters as needed (e.g. price range)
        if (empty($request->get('price_range_max'))) {
            $request['price_range_max'] = "1000";
        }

        try{

            $books = $books->select('books.id as book_id','title','type','edition','price','copies','condition',
                'cover_image','languages.name as language','publishers.name as publisher',
                DB::raw("GROUP_CONCAT(authors.name ORDER BY authors.name SEPARATOR ', ')  as author"))
                ->join('books_authors', 'books.id', '=', 'books_authors.book_id')
                ->join("authors", "books_authors.author_id", "=", "authors.id")
                ->join("publishers", "books.publisher_id", "=", "publishers.id")
                ->join('languages', 'books.language_id', '=', "languages.id")
                //->join('spirits', 'books.spirit_id', '=', "spirits.id")
                ->whereIn('type',['messages.sell','messages.rent'])
                ->whereBetween('price',[$request->get('price_range_min'),$request->get('price_range_max')])
                ->orderBy('title')
                ->groupBy('books.id','book_id','title','type','edition','price','copies','condition',
                'cover_image','language','publisher')
                ->paginate(6);

//            $books = DB::table("books")
//                ->select('books.id as book_id','title','type','edition','price','copies','condition','status',
//                    'spirits.name as spirit','languages.name as language','publishers.name as publisher',
//                    DB::raw("GROUP_CONCAT(authors.name ORDER BY authors.name SEPARATOR ', ')  as author"))
//                ->groupBy('books.id')
//                ->get();

            $languages = Language::select(DB::raw('languages.id,name,sum(books.copies) as qtd'))
                ->join('books', 'books.language_id', '=', "languages.id")
                ->where('active',true)
                ->where('type','!=','messages.study')
                ->groupBy('languages.id','name')
                ->orderby('name')
                ->get();

            $publishers = Publisher::select(DB::raw('publishers.id,name,sum(books.copies) as qtd'))
                ->leftjoin('books', 'books.publisher_id', '=', "publishers.id")
                ->where('type','!=','messages.study')
                ->groupBy('publishers.id','name')
                ->orderby('name')
                ->get();

            $authors = Author::select(DB::raw('authors.id,name,sum(books.copies) as qtd'))
                ->join('books_authors', 'author_id', '=', 'authors.id')
                ->join('books', 'books.id', '=', 'books_authors.book_id')
                ->where('type','!=','messages.study')
                ->groupBy('authors.id','name')
                ->orderby('name')
                ->get();

            // $spirits = Spirit::select('id','name')->orderby('name')->get();

        }catch (\Exception $exception){
            Log::error('Error '.$exception->getMessage());
            $books_sql = $books->select('books.id as book_id','title','type','edition','price','copies','condition',
                'cover_image','languages.name as language','publishers.name as publisher',
                DB::raw("GROUP_CONCAT(authors.name ORDER BY authors.name SEPARATOR ', ')  as author"))
                ->join('books_authors', 'books.id', '=', 'books_authors.book_id')
                ->join("authors", "books_authors.author_id", "=", "authors.id")
                ->join("publishers", "books.publisher_id", "=", "publishers.id")
                ->join('languages', 'books.language_id', '=', "languages.id")
                //->join('spirits', 'books.spirit_id', '=', "spirits.id")
                //->whereIn('type',['messages.sell','messages.rent'])
                ->whereBetween('price',[$request->get('price_range_min'),$request->get('price_range_max')])
                ->orderBy('title')
                ->groupBy('books.id','book_id','title','type','edition','price','copies','condition',
                    'cover_image','languages.name as language','publishers.name as publisher',)
                ->toRawSql();
            Log::error('SQL : '.$books_sql);

            die($exception->getMessage());
        }
        return view('pages._frontend.library', compact('books','languages','publishers','authors','searched_languages','searched_publishers','searched_authors','search_box'));
    }

}


