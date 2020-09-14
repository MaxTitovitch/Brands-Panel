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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'BrandsController@index')->name('user-welcome');
Route::get('/brand/{id}', 'BrandsController@show')->name('user-brand');

Route::get('/affiliate-programs', 'BrandsController@indexAffiliate')->name('user-affiliate');
Route::get('/affiliate-programs/print', 'BrandsController@indexAffiliatePrint')->name('user-affiliate-print');
//Route::get('/affiliate-programs/{id}', 'BrandsController@showAffiliate')->name('user-affiliate-one');
Route::get('/questions/{slug}', 'BrandsController@showAffiliate')
    ->name('user-affiliate-one')->where('name', '[A-Za-z0-9\\-]+');