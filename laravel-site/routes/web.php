<?php
use App\Http\Controllers\AdminProductController;
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

//Route for storing product requests in the admin page
Route::post('/admin/dashboard', [AdminProductController::class, 'store'])->name('admin.store');

//When going to the products page we are getting a index of all
//products from our database using the index() function
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

//This route takes an {id} as a query parameter to take you 
//to a specific product page.
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

//Returns the dashboard view of the admin page
Route::get('/admin/dashboard', [AdminProductController::class, 'adminIndex']);

//Admin route to delete a product
Route::delete('/admin/dashboard/{id}', [AdminProductController::class, 'destroy'])->name('admin.destroy');

Route::get('/admin/edit/{id}', [AdminProductController::class, 'show'])->name('admin.edit');

Route::post('admin/edit/{id}', [AdminProductController::class, 'edit'])->name('admin.edited');







//This route sends you to the landing page(welcome page of the site)
Route::get('/', function () {
    return view('welcome');
});

//Returns the add product view for the admin
Route::get('/admin/create', function() {
    return view('admin.create');
});
//Route for login
Route::get('/login', function() {
    return view('login');
});

//Route for signup
Route::get('/signup', function() {
    return view('signup');
});

//Route for About Us
Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});


Route::get('/basket', function() {
    return view('basket');
});