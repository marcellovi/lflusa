<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Models\Book;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CalendarController extends Controller
{

    public function calendar(){

        $events = Calendar::query()->select('title','start','end','color','url')->where('start', '>=',Carbon::now()->startOfMonth())->get();

        return view('pages._frontend.calendar')->with('events', $events);
    }

    public function index(){

        $events = Calendar::all();
        return view('pages._admin.calendar.index',compact('events'));
    }

    public function create(){

        $routes = Route::getRoutes();
        $prefix = 'library'; // Example: filter routes starting with 'admin/'

        $specificRoutes = collect($routes)->filter(function ($route) use ($prefix) {
            // Check if the route's URI starts with the defined prefix
            return Str::startsWith($route->uri, $prefix);
        })->values()->all();

        $urls = [];
        $base_url = url('/');
        foreach ($specificRoutes as $route) {
            if(in_array('GET', $route->methods())){
                $urls[] = $base_url.'/'.$route->uri;
            }
        }
        return view('pages._admin.calendar.create')->with('urls',$urls);
    }

    public function edit($id){;
        $event = Calendar::query()->find($id)->first();
        return view('pages._admin.calendar.edit')->with('event',$event);
    }

    public function update(Request $request){
        dd($request->all());

        // validate request

        //find
        $event = Calendar::query()->find($request->get('id'))->first();

        // update

        //save

        return redirect()->route('calendar.index')
            ->with('success','Event Updated successfully');
    }

    public function store(Request $request){

        // todo check if date end is bigger than date start

        $request->validate([
            'title' =>  'required|max:100|min:5',
            'startDt' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'file' => [
                'file',
                'image',
                'max:200', // 200KB = 200 * 1024 bytes
                function ($attribute, $value, $fail) use ($request) {
                    if ($request->hasFile('file')) {
                        $originalFilename = str_replace(' ','_',$request->file('file')->getClientOriginalName());

                        if (Storage::disk('public')->exists('images/events/' . $originalFilename)) {
                            $fail('The file already exists in the eventa folder.');
                        }else{
                            $file = $request->file('file');

                            // Store the file in 'public/images/books' with its original name
                            $path = $file->storeAs('public/images/events', $originalFilename);
                            $request['image'] = $originalFilename; // only save the name in the DB
                        }
                    }
                },
            ],
        ]);
        $events = DB::table('calendars')->insert([
            'title' => $request->get('title'),
            'start' => $request->get('startDt'),
            'end' => $request->get('endDt'),
            'color' => $request->get('color'),
            'url' => ($request->get('url') == null) ? '' : $request->get('url'),
            'description' => ($request->get('description') == null) ? '' : $request->get('description'),
            'image' => ($request->get('image')== null) ? '' : $request->get('image'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->back()->with('success','Event created successfully!');
    }

    public function destroy($id){

        $event = Calendar::query()->find($id);
        if($event == null || $event->count() == 0)
        {
            return redirect()->route('calendar.index')
                ->with('error', 'Event not found!');
        }
        $event->delete();
        return redirect()->route('calendar.index')
            ->with('success','Event deleted successfully');
    }
}
