<?php

namespace App\Http\Controllers;

use App\Models\PrayerBox;
use Illuminate\Http\Request;

class PrayerBoxController extends Controller
{
    //
    public function store(Request $request){

        $request['created_at'] = date('Y-m-d H:i:s');
        PrayerBox::create($request->all());
        return redirect()->back()->with('success', 'Prayer Box has been created.');
    }
}
