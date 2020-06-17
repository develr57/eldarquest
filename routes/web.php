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
    return view('main');
});

Route::get('/feedback/show', 'FeedbackController@show');

Route::post('/feedback/store', 'FeedbackController@store');

Route::get('/feedback/accepted', 'FeedbackController@accepted');

Route::get('/feedback/notaccepted', 'FeedbackController@notaccepted');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::group(['namespace' => 'admin'], function() {
    Route::get('/admin', 'HomeController@index')->name('home');
    Route::get('/admin/showfeedbacks', 'HomeController@showfeedbacks')->name('showfeedbacks');
});

Route::group(['namespace' => 'auth'], function() {
    Route::get('/logout', 'LoginController@logout')->name('logout');
});