<?php

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
    return redirect()->route('notes.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('notes', 'NoteController');
Route::get('/test', function() {
    return view('notes.newindex', []);
});
