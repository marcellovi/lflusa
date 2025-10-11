<?php

namespace App\Http\Controllers;

use App\Models\PrayerBox;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrayerBoxController extends Controller
{

    public function index()
    {
        $prayerBoxes = PrayerBox::all();
        return view('pages._admin.prayerbox.index', compact('prayerBoxes'));
    }

    public function store(Request $request){

        $request['created_at'] = date('Y-m-d H:i:s');
        PrayerBox::create($request->all());
        return redirect()->back()->with('success', 'Thank You! We will pray for them.');
    }

    public function print()
    {
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();

        $listPrayerBox = PrayerBox::whereBetween('created_at', [$startOfWeek, $endOfWeek])
            ->select(DB::raw('GROUP_CONCAT(names) as names'),'type')
            ->groupBy('type')
            ->get();

        return view('pages._admin.prayerbox.print', compact('listPrayerBox', 'startOfWeek', 'endOfWeek'));
    }
}
