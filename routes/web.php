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

//Articles
Route::resource('articles', 'ArticlesController');
Route::get('/', 'ArticlesController@index')->name('root');

//Comments
Route::resource('comments','CommentsController');

//Excel
Route::get('importExport', 'ExportsImportsController@importExport')->name('imandex');
Route::get('downloadExcel/{type}', 'ExportsImportsController@downloadExcel');
Route::post('importExcel', 'ExportsImportsController@importExcel');

// Route::get('/', function () {
//     return view('welcome');
// });
