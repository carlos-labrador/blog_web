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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    /**
     * Guest Routes
     */
    Route::get('/', 'BlogController@index')->name('blog.index');
    Route::get('post/{post:slug}', 'PostController@slug')->name('posts.slug');
    Route::group(['middleware' => ['guest']], function () {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegistrationController@show')->name('register.show');
        Route::post('/register', 'RegistrationController@store')->name('register.store');

        /**
         * Login Routes
         */
        Route::get('/login', 'Auth\LoginController@show')->name('login');
        Route::post('/login', 'Auth\LoginController@login')->name('login.perform');
    });

    /** 
     * Private Routes 
     */
    Route::group(['middleware' => ['auth']], function () {

        Route::get('/home', 'HomeController@index')->name('home.index');


        Route::post('/logout', 'Auth\LogoutController@destroySession')->name('logout');

        Route::post('post/{post}/comment','CommentController@store')->name('comment.store');
        Route::resource('posts', PostController::class);


        Route::group(['middleware' => ['role:admin']], function () {
            Route::resource('users', UserController::class);
        });
    });
});
