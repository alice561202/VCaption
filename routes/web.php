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
Route::middleware('auth')->post('/room/new', 'RoomController@new');
Route::middleware('auth')->post('/room/list', 'RoomController@list');
Route::middleware('auth')->post('/room/add', 'RoomController@add');
Route::middleware('auth')->post('/room/detail', 'RoomController@detail');
Route::middleware('auth')->post('/room/favorite', 'RoomController@favarite');
Route::middleware('auth')->post('/room/sort', 'RoomController@sort');
Route::middleware('auth')->post('/room/logout', 'RoomController@logout');
Route::middleware('auth')->post('/room/delete', 'RoomController@delete');

//customer
Route::middleware('auth')->post('/member/logout', 'MemberController@list');
Route::middleware('auth')->post('/member/delete', 'MemberController@add');
Route::middleware('auth')->post('/member/Reconfigure', 'MemberController@Reconfigure');

//chat
Route::middleware('auth')->post('/screen/chat', 'ScreenController@chat');
Route::middleware('auth')->post('/screen/voice', 'ScreenController@voice');
Route::middleware('auth')->post('/screen/video', 'ScreenController@video');
