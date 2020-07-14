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
})->name('mainPage');

Route::get('/feedback/show', 'FeedbackController@show')
    ->name('showFeedbackForm');

Route::post('/feedback/store', 'FeedbackController@store')
    ->name('storeFeedback');

Route::get('/feedback/accepted', 'FeedbackController@accepted')
    ->name('feedbackAccepted');

Route::get('/feedback/showfeedbacks', 'FeedbackController@showFeedbacks')
    ->name('showFeedbacks')->middleware('auth');

Auth::routes();

Route::group(['namespace' => 'admin'], function() {
    Route::get('/admin', 'HomeController@index')->name('home');
});