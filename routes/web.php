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
    return view('welcome');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

Route::get('/posts/create','App\Http\Controllers\PostsController@create');

Route::get('/dashboard/{user}','App\Http\Controllers\ProfileController@index')->middleware(['auth'])->name('dashboard.show');

Route::get('/dashboard/{user}/edit','App\Http\Controllers\ProfileController@edit')->middleware(['auth'])->name('dashboard.edit');

require __DIR__.'/auth.php';
