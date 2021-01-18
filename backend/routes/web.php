<?php

use Illuminate\Support\Facades\Route;

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
    return view('layouts.app');
});

// ポスト一覧画面表示
// Route::get('/posts', 'App\Http\Controllers\PostController@index');

Route::resource('posts', 'App\Http\Controllers\PostController', ['only' => ['index', 'create', 'show', 'delete']]);


// Route::get('/info', function() {
//     return view('information');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
