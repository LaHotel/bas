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
    return view('welcome');
});

Route::get('/menu','LoginController@menu');

Route::get('/room', function () {
    return view('RoomType');
});

Route::get('/check', function () {
    return view('CheckInOut');
});

Route::get('/delete', function () {
    return view('delete');
});

Route::get('/complete', function () {
    return view('complete');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ใช้ path insertdate ในการเรียกใช้ store ใน controller
Route::get('/insertdate', 'TimeController@store');

Route::get('/delete/{id}/{DateStart}/{DateEnd}/{RoomType}', 'TimeController@delete');

Route::get('/create', 'TimeController@index');

Route::get('/update/{id}', 'TimeController@update');

Route::get('/delete', function () {
    
    $booking = DB::table('booking')->where('Name','=', Auth::user()->name)->get()->toArray();
    return view('delete', compact('booking'));
});



