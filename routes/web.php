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
use App\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
Route::get('/hire', function () {
    $notifications = User::get();
    Notification::send($notifications,new \App\Notifications\RepliedToThread());
    foreach ($notifications as $notification){}
    return $notification;
});

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
