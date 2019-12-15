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

Route::domain('store.openmart.ga')->group(function(){
    Route::get("/", 'Store\StoreController@index')->name("store");
    Route::get("/login", 'Store\AuthController@index')->name("store_login");
    Route::get("/register", 'Store\AuthController@register')->name("store_register");
    Route::get("/register", 'Store\AuthController@logout')->name("store_logout");
    Route::middleware(['store'])->group(function(){
        Route::post("/add_product", 'Store\StoreController@add_product')->name("add_product");
        Route::get("/dashboard/{page}", 'Store\StoreController@dashboard')->name("store_page");
        Route::get("/dashboard", 'Store\StoreController@dashboard')->name("store_dashboard");
        Route::get("/{id}", 'Store\StoreController@products')->where('name', '([A-Za-z]\+)+')->name("store_products");
    });
});

Route::get('/', 'Index\IndexController@index');

Route::group(['prefix' => 'product'], function () {
    Route::get("/", 'Product\ProductController@index');
    Route::get("/{url}", 'Product\ProductController@details')->where('name', '([A-Za-z]\+)+')->name("productDetails");

});

Route::prefix("cart")->group(function() {
    Route::get("/", 'Cart\CartController@index')->name("cart");
});

Route::group(['prefix' => 'product'], function () {
    Route::get("/", 'Product\ProductController@index');
    Route::get("/{id}", 'Product\ProductController@store')->where('name', '([A-Za-z]\+)+')->name("store");
});

Route::group(['prefix' => 'store'], function () {
    Route::get("/", 'Store\StoreController@index');
    Route::post("/add_product", 'Store\StoreController@add_product')->name("add_product");
    Route::get("/dashboard/{page}", 'Store\StoreController@dashboard')->name("store_page");
    Route::get("/dashboard", 'Store\StoreController@dashboard')->name("store_dashboard");
    Route::get("/{id}", 'Store\StoreController@products')->where('name', '([A-Za-z]\+)+')->name("store");
});

Route::get('/contactus', 'ContactUs\ContactUsController@index')->name('contactus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
