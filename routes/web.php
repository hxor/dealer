<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);

Route::get('/motor', ['as' => 'motor', 'uses' => 'HomeController@getMotor']);
Route::get('/motor/{cat}', ['as' => 'motor.cat', 'uses' => 'HomeController@getMotorCat']);
Route::get('/motor/{slug}/detail', ['as' => 'motor.detail', 'uses' => 'HomeController@getMotorDetail']);

Route::get('/contact', ['as' => 'contact', 'uses' => 'HomeController@getContact']);
Route::get('/about-us', ['as' => 'about-us', 'uses' => 'HomeController@getAboutUs']);

// Auth::routes();
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
// Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm');
// Route::post('register', 'Auth\RegisterController@register');
// Password Reset Routes...
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'namespace' => 'Admin'], function(){
    Route::get('/', ['as' => 'admin', 'uses' => 'AdminController@index']);

    // Gallery Route
    Route::resource('/gallery', 'GalleryController', ['names' => 'admin.gallery']);
    Route::get('/gallery/{id}/image', ['as' => 'admin.image.create', 'uses' => 'GalleryController@getFormImage']);
    Route::post('/gallery/{id}/image', ['as' => 'admin.image.upload', 'uses' => 'GalleryController@doUploadImage']);
    Route::delete('/gallery/{id}/image', ['as' => 'admin.image.destroy', 'uses' => 'GalleryController@doImageDestroy']);

    // Category
    Route::resource('/category', 'CategoryController', ['names' => 'admin.category']);

    // Motor
    Route::resource('/motor', 'MotorController', ['names' => 'admin.motor']);
    Route::get('/motor/{id}/spec/create', ['as' => 'admin.spec.create', 'uses' => 'MotorController@getSpecForm']);
    Route::post('/motor/{id}/spec/store', ['as' => 'admin.spec.store', 'uses' => 'MotorController@postSpec']);
    Route::get('/motor/{id}/spec/{ids}/edit', ['as' => 'admin.spec.edit', 'uses' => 'MotorController@getSpecFormEdit']);
    Route::put('/motor/{id}/spec/{ids}/update', ['as' => 'admin.spec.update', 'uses' => 'MotorController@postSpecUpdate']);
    Route::delete('/motor/{id}/spec/{ids}/delete', ['as' => 'admin.spec.delete', 'uses' => 'MotorController@destroySpec']);
});
