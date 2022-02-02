<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\PostSearcherController;

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
    return view('home');
});

Route::get('posts', [PostSearcherController::class, 'getPosts']);
Route::get('posts/{id}', [PostSearcherController::class, 'getPost']);