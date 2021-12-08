<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\SongController;

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


Route::get('/', function () {
    return view('welcome');
});

/*

Route::get('/', function () {
    return view('posts');
});

Route::get('posts/{post}', function($slug) {
    $path = __DIR__ . "/../resources/posts/{$slug}.html";

    if(! file_exists($path)){
        return redirect('/');
        // abort(404);
    }
    
    $post = file_get_contents($path);

    return view('post', [
        'post' => $post // post
    ]);
})->where('post', '[A-z_\-]+');


Route::get('/index', function(){
    return view('index');
});

Route::get('/contact', function(){
    return view('contact');
});

*/


Route::get('/index', [GenreController::class, 'show']);

//Route::get('test', [SongController::class, 'show']);

Route::GET('genre/{id}', [GenreController::class, 'showSongsForGenre']);

Route::GET('song/{SongId}', [SongController::class, 'showSong']);

Route::GET('/playlist', [App\Http\Controllers\PlaylistController::class, 'index'])->name('playlist.index');
Route::GET('/playlist/add/{id}', [App\Http\Controllers\PlaylistController::class, 'add'])->name('playlist.add');
