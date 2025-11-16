<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){

        $futureEvents = DB::table('calendars')
            ->where('start', '>', date('Y-m-d'))
            ->orderBy('start', 'asc')
            ->limit(3)
            ->get();

        $pastEvents = DB::table('calendars')
            ->where('start', '<', date('Y-m-d'))
            ->inRandomOrder()
            ->first();

        return view('pages._frontend.home', compact('futureEvents', 'pastEvents'));
    }

    public function showEvent($id){
        $event= DB::table('calendars')->where('id', $id)->first();
        $future_events = DB::table('calendars')
            ->whereNot('id', $id)
            ->where('start', '>', date('Y-m-d'))
            ->inRandomOrder()
            ->limit(2)
            ->get();

        return view('pages._frontend.event_detail', compact('event', 'future_events'));
    }
}
