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

// Auth::routes();

/*
 * Auth
 */
Route::group(array('middleware' => 'guest'), function () {
    // Login
	Route::get('login', 'AuthController@getLogin')->name('login');
	Route::post('login', 'AuthController@postLogin')->name('login');

    // Recover password
    Route::get('forgot-password', 'AuthController@getForgotPassword')->name('forgot-password');
    Route::post('forgot-password', 'AuthController@postForgotPassword')->name('forgot-password');
    // Route::get('forgot-password/{userId}/{passwordResetCode}', array('as' => 'forgot-password-confirm', 'uses' => 'AuthController@getForgotPasswordConfirm'));
    // Route::post('forgot-password/{userId}/{passwordResetCode}', 'AuthController@postForgotPasswordConfirm');
});

Route::group(array('middleware' => 'sentinelAuth'), function () {
    Route::get('logout', 'AuthController@logout')->name('logout');

    Route::get('/home', 'HomeController@index')->name('home');
});
