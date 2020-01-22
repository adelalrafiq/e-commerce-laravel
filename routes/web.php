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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::match(['get', 'post'], '/', 'IndexController@index');
Route::get('/products/{id}', 'ProductsController@products');
Route::get('/categories/{category_id}', 'IndexController@categories');
Route::get('/get-product-price', 'ProductsController@getPrice');
Route::match(['get', 'post'], '/admin', 'AdminController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route for add to cart
Route::match(['get', 'post'], '/add-cart', 'ProductsController@AddtoCart');
// Route for cart
Route::match(['get', 'post'], '/cart', 'ProductsController@cart');
// Route for product delete from cart
Route::get('/cart/delete-product/{id}', 'ProductsController@deleteCartProduct');


// Users Register page
Route::get('/user-register', 'UsersController@userRegister');

// Users Register Form Submit
Route::post('/register', 'UsersController@register');

// User Login Page
Route::get('/user-login', 'UsersController@userLogin');

// Users Login Form Submit
Route::post('/login', 'UsersController@login');

// Users Logout
Route::get('/user-logout', 'UsersController@logout');

// Check if User already exist
Route::match(['get', 'post'], '/check-email', 'UsersController@checkEmail');

// All Routes after login
Route::group(['middleware' => ['frontlogin']], function () {
    // User Account Page
    Route::match(['get', 'post'], '/account', 'UsersController@account');
});

Route::group(['middleware' => ['auth']], function () {
    Route::match(['get', 'post'], '/admin/dashboard', 'AdminController@dashboard');

    //Category Route
    Route::match(['get', 'post'], '/admin/add-category', 'CategoryController@addCategory');
    Route::match(['get', 'post'], '/admin/view-categories', 'CategoryController@viewCategories');
    Route::match(['get', 'post'], '/admin/edit-category/{id}', 'CategoryController@editCategory');
    Route::match(['get', 'post'], '/admin/delete-category/{id}', 'CategoryController@deleteCategory');
    Route::post('/admin/update-category-status', 'CategoryController@updateStatus');

    //Product Route
    Route::match(['get', 'post'], '/admin/add-product', 'ProductsController@addProduct');
    Route::match(['get', 'post'], '/admin/view-products', 'ProductsController@viewProducts');
    Route::match(['get', 'post'], '/admin/edit-product/{id}', 'ProductsController@editProduct');
    Route::match(['get', 'post'], '/admin/delete-product/{id}', 'ProductsController@deleteProduct');
    Route::post('/admin/update-product-status', 'ProductsController@updateStatus');
    Route::post('/admin/update-featured-product-status', 'ProductsController@updateFeatured');

    //Products Attributes
    Route::match(['get', 'post'], '/admin/add-attributes/{id}', 'ProductsController@addAttributes');
    Route::get('/admin/delete-attribute/{id}', 'ProductsController@deleteAttribute');
    Route::match(['get', 'post'], '/admin/edit-attributes/{id}', 'ProductsController@editAttributes');
    Route::match(['get', 'post'], '/admin/add-images/{id}', 'ProductsController@addImages');
    Route::get('/admin/delete-alt-image/{id}', 'ProductsController@deleteAltImage');

    //Banners Route
    Route::match(['get', 'post'], '/admin/banners', 'BannersController@banners');
    Route::match(['get', 'post'], '/admin/add-banner', 'BannersController@addBanner');
    Route::match(['get', 'post'], '/admin/edit-banner/{id}', 'BannersController@editBanner');
    Route::match(['get', 'post'], '/admin/delete-banner/{id}', 'BannersController@deleteBanner');
    Route::post('/admin/update-banner-status', 'BannersController@updateStatus');
});

Route::get('/logout', 'AdminController@logout');
