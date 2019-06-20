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
   return view('template/home');
});

Route::get('home', function () {
    return view('template/home');
});

Route::get('/faq', 'TemplateController@faq');
Route::get('/about-us', 'TemplateController@about');
Route::get('/products/20-ft-container', 'TemplateController@products20');
Route::get('/products/40-ft-container', 'TemplateController@products40');
Route::get('/products/45-ft-container', 'TemplateController@products45');
Route::get('/products/53-ft-container', 'TemplateController@products53');
Route::get('/products/custom-size-container', 'TemplateController@productscustomsize');

Route::post('/template/contactUs', 'TemplateController@contactUs');
Route::post('/template/getQuote', 'TemplateController@getQuote');

