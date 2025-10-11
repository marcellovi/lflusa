<?php

use App\Http\Controllers\BookController;
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

Route::get('/calendar', function () {
    return view('pages._frontend.calendar');
});

/** LIBRARY  */
Route::get('/library',[BookController::class,'list'])->name('frontend.library');

/**********************************/
/*************** ADMIN ***********/
/**********************************/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/myadmin', function () { return view('admin/dashboard'); });

    /** LIBRARY  */
    // returns the library page with all books
    Route::get('/admin/library/', [BookController::class, 'index'])->name('books.index');

    /** PRAYER BOX  */
    Route::get('/admin/prayerbox/', [PrayerBoxController::class, 'index'])->name('prayerbox.index');
    Route::get('/admin/prayerbox/print', [PrayerBoxController::class, 'print'])->name('prayerbox.print');

});

Route::get('/dashboard', function () {
    return view('admin/dashboard'); //return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::post('/downlaod',[BookController::class,'store'])->name('download');
Route::get('/',[HomeController::class,'index'])->name('frontend.home');


// returns the form for adding a book
Route::get('/admin/library/create', [BookController::class, 'create'])->name('books.create');
// returns the form for editing a book
Route::get('/admin/library/{id}/edit', [BookController::class, 'edit'])->name('books.edit');// returns the form for editing a book
// adds a book to the database
Route::post('/admin/library/store', [BookController::class, 'store'])->name('books.store');

// Route::get('/admin/library/show/{id}', [BookController::class, 'edit'])->name('books.show');

//Route::post('/admin/library/destroy', [BookController::class, 'destroy'])->name('books.destroy');
Route::post('/admin/library/update', [BookController::class, 'update'])->name('books.update');

Route::delete('/admin/library/{id}', BookController::class .'@destroy')->name('books.destroy');

//// returns the home page with all posts
//Route::get('/', PostController::class .'@index')->name('posts.index');
//// returns the form for adding a post
//Route::get('/posts/create', PostController::class . '@create')->name('posts.create');
//// adds a post to the database
//Route::post('/posts', PostController::class .'@store')->name('posts.store');
//// returns a page that shows a full post
//Route::get('/posts/{post}', PostController::class .'@show')->name('posts.show');
//// returns the form for editing a post
//Route::get('/posts/{post}/edit', PostController::class .'@edit')->name('posts.edit');
//// updates a post
//Route::put('/posts/{post}', PostController::class .'@update')->name('posts.update');
//// deletes a post
//Route::delete('/posts/{post}', PostController::class .'@destroy')->name('posts.destroy');







//Route::get('/library', function() {
//    return view('frontend/library');
//});

//




//Route::get('/welcome', function () {
//    return view('welcome');
//});


Route::get('/library2', function() {
    return view('frontend/library2');
});

Route::get('/library3-1', function() {
    return view('frontend/library3-1');
});


//Route::get('/library3',[BookController::class,'searchQuery'])->name('search_query');

Route::get('/library2', function() {
    return view('frontend/library2');
});





require __DIR__.'/auth.php';
