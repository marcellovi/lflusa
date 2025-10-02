<?php

use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/test', function (Request $request) {
    return response()->json([
        [
            'title'=> 'Business Lunch',
            'start'=> '2025-01-03T13:00:00',
            'constraint' => 'businessHours'
        ],[
            'title'=> 'Meeting',
            'start'=> '2025-01-13T11:00:00',
            'constraint' => 'availableForMeeting',
            'color' =>  '#257e4a'
        ],[
            'title'=> 'Conference',
            'start'=> '2025-01-18T10:00:00',
            'end' => '2025-01-18T20:00:00'
        ],[
            'title'=> 'Party',
            'start'=> '2025-01-29T20:00:00'
        ],[
            'groupId'=> 'availableForMeeting',
            'start'=> '2025-01-11T10:00:00',
            'end' => '2025-01-11T16:00:00',
            'display' => 'background'
        ],[
            'groupId'=> 'availableForMeeting',
            'start'=> '2025-01-13T10:00:00',
            'end' => '2025-01-13T16:00:00',
            'display' => 'background'
        ],[
            'start'=>  '2025-01-24',
            'end' => '2025-01-28',
            'overlap' => false,
            'display'=> 'background',
            'color' =>  '#ff9f89'
        ],[
            'start'=>  '2025-01-06',
            'end' => '2025-01-08',
            'overlap' => false,
            'display'=> 'background',
            'color' =>  '#ff9f89'
        ],

        ]);
});
