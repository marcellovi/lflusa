<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PrayerBoxController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*** FRONT END ***/

Route::get('/',[HomeController::class,'index'])->name('frontend.home');
Route::get('/event/{id}',[HomeController::class,'showEvent'])->name('event.detail');

Route::get('/lang/{lang}', [LocalizationController::class, 'index']);

Route::get('/book/{id}/details', [BookController::class, 'detail'])->name('books.details');

Route::post('/prayerbox',[PrayerboxController::class, 'store'])->name('prayerbox.store');

Route::get('/founders', function (){
    return view('pages._frontend.founders');
});

Route::get('/about', function (){
    return view('pages._frontend.about');
});

Route::get('/spiritism', function (){
    return view('pages._frontend.spiritism');
});

Route::get('/soon', function () {
    return view('frontend/soon');
});

Route::post('/contact-form', function () {
    return redirect()->back()->with('success', 'Sua mensagem foi enviada com sucesso!.');
})->name('contact-form');

Route::get('/calendar', [CalendarController::class, 'calendar'])->name('calendar');

/** LIBRARY  */
Route::get('/library',[BookController::class,'list'])->name('frontend.library');

/**********************************/
/*************** ADMIN ***********/
/**********************************/

Route::middleware('auth')->group(function () {

    /** ADMIN PROFILE **/
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/myadmin', function () { return view('admin/dashboard'); });

    /** ADMIN LIBRARY  */
    // returns the library page with all books
    Route::get('/admin/library/', [BookController::class, 'index'])->name('books.index');
    // returns the form for adding a book
    Route::get('/admin/library/create', [BookController::class, 'create'])->name('books.create');
    // returns the form for editing a book
    Route::get('/admin/library/{id}/edit', [BookController::class, 'edit'])->name('books.edit');// returns the form for editing a book
    // adds a book to the database
    Route::post('/admin/library/store', [BookController::class, 'store'])->name('books.store');
    // Route::get('/admin/library/show/{id}', [BookController::class, 'edit'])->name('books.show');

    //Route::post('/admin/library/destroy', [BookController::class, 'destroy'])->name('books.destroy');
    Route::put('/admin/library/update', [BookController::class, 'update'])->name('books.update');
    Route::get('/admin/library/{id}', BookController::class .'@destroy')->name('books.destroy');


    /** PRAYER BOX  */
    Route::get('/admin/prayerbox/', [PrayerBoxController::class, 'index'])->name('prayerbox.index');
    Route::get('/admin/prayerbox/print', [PrayerBoxController::class, 'print'])->name('prayerbox.print');

    /** CALENDAR  */
    Route::get('/admin/calendar',[CalendarController::class,'index'])->name('calendar.index');
    Route::get('/admin/calendar/create', [CalendarController::class, 'create'])->name('calendar.create');
    Route::post('/admin/calendar/store', [CalendarController::class, 'store'])->name('calendar.store');
    Route::get('/admin/calendar/{id}/edit', [CalendarController::class, 'edit'])->name('calendar.edit');
    Route::put('/admin/calendar/update', [CalendarController::class, 'update'])->name('calendar.update');
    Route::get('/admin/calendar/{id}', [CalendarController::class,'destroy'])->name('calendar.destroy');

    Route::post('/downlaod',[BookController::class,'store'])->name('download');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard'); //return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::get('/library2', function() {
    return view('frontend/library2');
});

Route::get('/library3', function() {
    return view('frontend/library3');
});






require __DIR__.'/auth.php';
