<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController as ComicController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     $comics = config('comics');
//     return view('comics', compact('comics'));
// })->name('comics');

Route::get('/', [ComicController::class,'index'])->name('comics');

Route::get('/comics/{id}', [ComicController::class, 'show'])->name('detail');


// Route::get('/comics/{param}', function($param){
//     $comics = config('comics');

//     $single_comic = '';
//     foreach($comics as $key => $comic){
//         if($key == $param){
//             $single_comic = $comic;
//         }
//     }

//     return view('detail', compact('single_comic'));

// })->name('detail');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');
