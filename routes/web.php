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
Route::get('/', 'MainController@index')->name('home');

Route::get('/contactus', 'MainController@contact')->name('contact');

Route::get('/aboutus', 'MainController@about')->name('about');

Route::get('/recipies', 'RecipiesController@recipies')->name('recipies');
Route::get('/recipies/{id}', 'RecipiesController@recipie')->name('recipie');


Route::post('logout', 'LoginController@logout')->name('Logout');

Route::get('category/{id}', 'PublicProductController@category')->name('public.category');
Route::get('subcategory/{id}', 'PublicProductController@subCategory')->name('public.subCategory');

Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function() {
    Route::get('/', 'AdminController@admin')->name('admin');
    Route::resource('categories', 'CategoryController');
    Route::get('recipies', 'AdminController@recipies')->name('crecipies');
    Route::post('recipies', 'AdminController@postRecipies')->name('postRecipies');
});

Route::group(['middleware' => 'visitor'], function() {
    Route::get('register', 'RegistrationController@register')->name('getRegister');

    Route::post('register', 'RegistrationController@postRegister')->name('postRegister');

    Route::get('login', 'LoginController@login')->name('getLogin');

    Route::post('login', 'LoginController@postLogin')->name('postLogin');
});


