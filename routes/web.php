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
    Route::get("/", 'Store\StoreController@index')->name("store.index");
    Route::get("/contact", 'Store\StoreController@contact')->name("store.contact");
    Route::get("/login", 'Store\AuthController@index')->name("store.login");
    Route::get("/register", 'Store\AuthController@register')->name("store.register");
    Route::get("/logout", 'Store\AuthController@logout')->name("logout");
    Route::post("/login", 'Store\AuthController@postLogin');
    Route::post("/register", 'Store\AuthController@postRegistration');
    Route::middleware(['store'])->group(function(){
        Route::post("/add_product", 'Store\StoreController@add_product')->name("store.add_product");
        Route::get("/dashboard/{page}", 'Store\StoreController@dashboard')->name("store.dashboard.page");
        Route::get("/dashboard", 'Store\StoreController@dashboard')->name("store.dashboard");
        Route::get("/{id}", 'Store\StoreController@products')->where('name', '([A-Za-z]\+)+')->name("store.products");
    });
});

Route::domain('store.openmart.dev')->group(function(){
    Route::get("/", 'Store\StoreController@index')->name("store.index");
    Route::get("/contact", 'Store\StoreController@contact')->name("store.contact");
    Route::get("/login", 'Store\AuthController@index')->name("store.login");
    Route::get("/register", 'Store\AuthController@register')->name("store.register");
    Route::get("/logout", 'Store\AuthController@logout')->name("logout");
    Route::post("/login", 'Store\AuthController@postLogin');
    Route::post("/register", 'Store\AuthController@postRegistration');
    Route::middleware(['store'])->group(function(){
        Route::post("/add_product", 'Store\StoreController@add_product')->name("store.add_product");
        Route::get("/dashboard/{page}", 'Store\StoreController@dashboard')->name("store.dashboard.page");
        Route::get("/dashboard", 'Store\StoreController@dashboard')->name("store.dashboard");
        Route::get("/{id}", 'Store\StoreController@products')->where('name', '([A-Za-z]\+)+')->name("store.products");
    });
});


Route::get('/', 'Index\IndexController@index');

Route::group(['prefix' => 'product'], function () {
    Route::get("/", 'Product\ProductController@index');
    Route::get("/{url}", 'Product\ProductController@details')->where('name', '([A-Za-z]\+)+')->name("productDetails");

});

Route::group(['prefix' => 'user'], function(){
    Route::get('/{page}', 'User\UserController@page')->name('user.page');
    Route::get('/', 'User\UserController@index')->name('user.index');
    Route::get('dashboard', 'User\UserController@dashboard')->name('user.dashboard');
    Route::get('account', 'User\UserController@account')->name('user.account');
    Route::get('settings', 'User\UserControlller@settings')->name('user.settings');
});

Route::prefix("cart")->group(function() {
    Route::get("/", 'Cart\CartController@index')->name("cart");
});

Route::group(['prefix' => 'product'], function () {
    Route::get("/", 'Product\ProductController@index');
    Route::get("/{id}", 'Product\ProductController@store')->where('name', '([A-Za-z]\+)+')->name("store");
});

Route::group(['prefix' => 'store'], function () {
    Route::get("/", 'Product\ProductController@index');
    Route::get("/{id}", 'Store\StoreController@products')->where('name', '([A-Za-z]\+)+')->name("products.store");
    Route::get("/{store_id}/product/{product_id}", 'Store\StoreController@products')->where('name', '([A-Za-z]\+)+')->name("store.product.details");

});

Route::get('/contact', 'ContactUs\ContactUsController@index')->name('contactus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

?>
