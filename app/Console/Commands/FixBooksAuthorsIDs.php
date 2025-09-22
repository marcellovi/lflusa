<?php

namespace App\Console\Commands;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Console\Command;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\DB;

class FixBooksAuthorsIDs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fix-books-authors-ids';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Read the author_id from Books database and try to match with the Authors database and create a
        record in the books_authors table';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $authors_books = Book::join('authors_copy','authors_copy.id','author_id')
                ->pluck('name','books.id');

        foreach ($authors_books as $book_id => $author_name) {

               // if($book_id != 301)
               //     continue;

                echo "Book id: {$book_id} - Author: {$author_name}\n";
                $authors_arr = explode(',',str_replace([' e ',' & '], ',', $author_name));
                foreach ($authors_arr as $name) {
                    $exist = Author::where('name',$name)->first();
                    if($exist){
                        DB::table('books_authors')->insert(['book_id'=>$book_id,'author_id'=>$exist->id]);
                    }
                }
         }
    }


    /**
     *  Function to get multiple names from string and explode and save in db
     */
    public function fixAuthorNames(){
        $authors = DB::table('authors_copy')->pluck('name'); //Author::select('id','name')->get();

        $all_coma = str_replace(['[',']','"'],'',str_replace([' e ',' & '], ',', $authors));

        $separate_names = explode(',', $all_coma);

        foreach ($separate_names as $name) {

            $exist = DB::table('authors')->where('name', trim($name))->exists();
            if(!$exist){
                DB::table("authors")->insert(['name' => trim($name)]);
            }
        }
        echo "Finished\n";
    }
}
