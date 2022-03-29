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

Route::get('/', function(){ return view('welcome');});
Route::get('calender', function(){ return view('fullcalendar');})->name('calender');
Route::get('addRoom', function(){ return view('mngRooms.addRoom');})->name('addRoom');
Route::get('editRoom', function(){ return view('editRoom');})->name('editRoom');
Route::get('addReservation', function(){ return view('mngReservations.addReservation');})->name('addReservation');
Route::get('addRoom', function(){ return view('mngRooms.addRoom');})->name('addRoom');

//room routers
Route::get('/store',"RoomController@store");
Route::get('/showList',"RoomController@showList");
Route::post('/update/{id}', "RoomController@update");
Route::get('/edit/{id}', "RoomController@edit");
Route::get('/destroy/{id}', "RoomController@destroy");

//reservation routers
Route::get('/storeR',"ReservationController@store");
Route::get('/showReser',"ReservationController@showReser");
Route::get('/showNames',"ReservationController@showNames");
Route::get('/editR/{id}',"ReservationController@edit");
Route::get('/updateR/{id}',"ReservationController@update");
Route::get('/destroyR/{id}', "ReservationController@destroy");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function(){ return view('dashboard');})->name('dashboard');
