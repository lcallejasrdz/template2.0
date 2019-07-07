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
    // Datatables
    Route::group(array('prefix' => 'admin'), function () {
        Route::get('data', 'DataTablesController@data')->name('data');
    });
        
    Route::get('logout', 'AuthController@logout')->name('logout');

    Route::get('/home', 'HomeController@index')->name('home');

    // Products
    $route = 'products';
    $controller = 'ProductController';
    Route::group(array('prefix' => $route), function () use ($route, $controller) {
        Route::get('deleted', $controller.'@getRestore')->name($route.'.deleted');
        Route::patch('restore', $controller.'@postRestore')->name($route.'.restore');
        Route::get('/', $controller.'@index')->name($route);
        Route::delete('delete', $controller.'@destroy')->name($route.'.delete');
        Route::get('create', $controller.'@create')->name($route.'.create');
        Route::post('create', $controller.'@store')->name($route.'.store');
        Route::get('{id}/edit', $controller.'@edit')->name($route.'.edit');
        Route::put('{id}/edit', $controller.'@update')->name($route.'.update');
        Route::get('{id}', $controller.'@show')->name($route.'.show');
    });
});
