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
    return view('frontend.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
    Route::get('chooseWinner','DrawController@chooseWinner')->name('winner');
    Route::get('/changeStatus','SubmissionsController@changeStatus')->name('changeStatus');
    Route::resource('submissions', 'SubmissionsController');
    Route::resource('draw', 'DrawController')->middleware('auth');
    Route::resource('users', 'UserController')->middleware('auth');
});

