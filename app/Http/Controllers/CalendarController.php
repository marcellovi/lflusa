<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{

    public function index(){

        $events = Calendar::all();
        return view('pages._admin.calendar.index',compact('events'));
    }

    public function create(){
        return view('pages._admin.calendar.create');
    }

    public function edit($id){
        return view('pages._admin.calendar.edit');
    }

    public function update(Request $request){
        return view('pages._admin.calendar.index');
    }

    public function store(Request $request){

        $request->validate([
            'title' => 'required|max:100|min:5',
            'start' => 'required|',
        ]);
        $events = Calendar::create($request->all());
        return view('pages._admin.calendar.index',compact('events'));
    }

    public function destroy($id){

        $existing = Calendar::find($id);
        if(!$existing){
            return view('pages._admin.calendar.index')->with('error','Event not found');
        }
        $existing->delete();
        return view('pages._admin.calendar.index')->with('success','Event deleted successfully');
    }
}
