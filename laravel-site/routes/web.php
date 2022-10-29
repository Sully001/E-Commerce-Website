<?php

use App\Http\Controllers\ProductController;
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

//When going to the products page we are getting a index of all
//products from our database using the index() function
Route::get('/products', [ProductController::class, 'index']);//->name('products.index');

Route::get('/products/{id}', [ProductController::class, 'show']);//->name('products.show');



