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


Route::get('/', [

    'uses' => 'ChekoutController@index',
    'as' => 'checkout.index'

]);

Route::post('/policy', [
    'uses' => 'ChekoutController@policy',
    'as' => 'policy'
]);

Route::post('/terms', [
    'uses' => 'ChekoutController@terms',
    'as' => 'terms'
]);

Route::get('/product', [

    'uses' => 'ChekoutController@product',
    'as' => 'checkout.product'

]);


/*********** steeper methods  */

Route::post('/confirm', [
    'uses' => 'ChekoutController@confirm',
    'as' => 'checkout.confirm'
]);

Route::post('/order', [
    'uses' => 'ChekoutController@order',
    'as' => 'checkout.order'
]);

Route::post('/contact', [
    'uses' => 'ChekoutController@contact',
    'as' => 'contact'
]);







