<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

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
//     $name = request('name');
//     return view('home', ['name' => $name]);
// });

Route::get('/', HomeController::class);

Route::view('about', 'about');

Route::get('/contact', function () {
    $name = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.
    Delectus quia reprehenderit minima recusandae? Perferendis,
    dolor eveniet! Soluta architecto atque quos.';
    return view('contact', ['name' => $name]);
});

Route::get('/test', function () {
    return request()->is('test') ? 'Yes' : 'Big No';
});

Route::get('categories/{category:slug}', [CategoryController::class, 'index']);

Route::get('post', [PostController::class, 'index']);

Route::get('post/create', [PostController::class, 'create']);
Route::post('post/store', [PostController::class, 'store']);

Route::get('post/{post:slug}/edit', [PostController::class, 'edit']);
Route::patch('post/{post:slug}/edit', [PostController::class, 'update']);

Route::delete('post/{post:slug}/delete', [PostController::class, 'destroy']);


Route::get('post/{post:slug}', [PostController::class, 'show']);