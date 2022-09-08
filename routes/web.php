<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Route::resource('product', ProductController::class);
Route::resource('category', CategoryController::class);

//   GET|HEAD    product .........................product.index › ProductController@index
//   POST        product .........................product.store › ProductController@store
//   GET|HEAD    product/create ..................product.create › ProductController@create
//   GET|HEAD    product/{product} ...............product.show › ProductController@show
//   PUT|PATCH   product/{product} ...............product.update › ProductController@update
//   DELETE      product/{product} ...............product.destroy › ProductController@destroy
//   GET|HEAD    product/{product}/edit ..........product.edit › ProductController@edit
