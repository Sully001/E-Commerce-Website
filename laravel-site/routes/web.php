<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\BasketController;

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

////////Basket Routes///////////
Route::get('/basket/{id}', [BasketController::class, 'index'])->name('basket');

Route::post('/basket', [BasketController::class, 'add'])->name('basket.add');







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

//Contact Route
Route::get('/contact', function() {
    return view('contact');
});


Route::get("/admin/users", [AdminUserController::class, 'userIndex']);

//Route for register page.
Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'store']);

//Route for login page.
Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'store']);

//Route for Logout
Route::get('/logout', [LogoutController::class, 'store']);

Route::get('/welcome', [DashboardController::class, 'index'])->name('welcome');