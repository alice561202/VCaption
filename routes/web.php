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

//room
Route::get('/room/top', 'RoomsController@top');
Route::get('/room/detail', 'RoomsController@detail');
Route::get('/room/favarite', 'RoomsController@favarite');
Route::get('/room/add', 'RoomsController@add');
Route::get('/room/delete', 'RoomsController@delete');
Route::get('/room/sort', 'RoomsController@sort');
Route::get('/room/logout    ', 'RoomsController@logout');

//chat
Route::get('/screen/chat', 'ScreensController@chat');
