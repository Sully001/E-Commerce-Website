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

//This route sends you to the landing page(welcome page of the site)
Route::get('/', function () {
    return view('welcome');
});

//Returns the dashboard view of the admin page
Route::get('/admin/dashboard', function() {
    return view('admin.dashboard');
});

//Returns the add prodct view for the admin
Route::get('/admin/create', function() {
    return view('admin.create');
});

//When going to the products page we are getting a index of all
//products from our database using the index() function
Route::get('/products', [ProductController::class, 'index']);//->name('products.index');

//This route takes an {id} as a query parameter to take you 
//to a specific product page.
Route::get('/products/{id}', [ProductController::class, 'show']);//->name('products.show');

//Route for login
Route::get('/login', function() {
    return view('login');
});

//Route for signup
Route::get('/signup', function() {
    return view('signup');
});


