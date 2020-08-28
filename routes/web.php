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
    Route::get("/about", 'Store\StoreController@about')->name("store.about");
    Route::get("/login", 'Store\AuthController@index')->name("store.login");
    Route::get("/register", 'Store\AuthController@register')->name("store.register");
    Route::get("/logout", 'Store\AuthController@logout')->name("store.logout");
    Route::post("/login", 'Store\AuthController@postLogin')->name('store.login.post');
    Route::post("/register", 'Store\AuthController@postRegistration')->name('store.register.post');
    Route::middleware(['store'])->group(function(){
        Route::get("/get_product/{product_id}", 'Store\StoreController@get_product')->name("store.get_product");
        Route::get("/dashboard/{page}", 'Store\StoreController@dashboard')->name("store.dashboard.page");
        Route::get("/dashboard", 'Store\StoreController@dashboard')->name("store.dashboard");
        Route::get("/{store_id}", 'Store\StoreController@products')->where('name', '([A-Za-z]\+)+')->name("store.products");
        Route::post("/add_product", 'Store\StoreController@add_product')->name("store.add_product");
        Route::post("/edit_product/{product_id}", 'Store\StoreController@edit_product')->name("store.edit_product");
        Route::post("/update_profile", 'Store\StoreController@update_profile')->name("store.profile.update");

    });
});

Route::domain('store.openmartgh.com')->group(function(){
    Route::get("/", 'Store\StoreController@index')->name("store.index");
    Route::get("/contact", 'Store\StoreController@contact')->name("store.contact");
    Route::get("/about", 'Store\StoreController@about')->name("store.about");
    Route::get("/login", 'Store\AuthController@index')->name("store.login");
    Route::get("/register", 'Store\AuthController@register')->name("store.register");
    Route::get("/logout", 'Store\AuthController@logout')->name("store.logout");
    Route::post("/login", 'Store\AuthController@postLogin')->name('store.login.post');
    Route::post("/register", 'Store\AuthController@postRegistration')->name('store.register.post');
    Route::middleware(['store'])->group(function(){
        Route::get("/get_product/{product_id}", 'Store\StoreController@get_product')->name("store.get_product");
        Route::get("/dashboard/{page}", 'Store\StoreController@dashboard')->name("store.dashboard.page");
        Route::get("/dashboard", 'Store\StoreController@dashboard')->name("store.dashboard");
        Route::get("/{store_id}", 'Store\StoreController@products')->where('name', '([A-Za-z]\+)+')->name("store.products");
        Route::post("/add_product", 'Store\StoreController@add_product')->name("store.add_product");
        Route::post("/edit_product/{product_id}", 'Store\StoreController@edit_product')->name("store.edit_product");
        Route::post("/update_profile", 'Store\StoreController@update_profile')->name("store.profile.update");

    });
});


Route::domain('store.openmart.test')->group(function(){
    Route::get("/", 'Store\StoreController@index')->name("store.test.index");
    Route::get("/contact", 'Store\StoreController@contact')->name("store.test.contact");
    Route::get("/about", 'Store\StoreController@about')->name("store.test.about");
    Route::get("/login", 'Store\AuthController@index')->name("store.test.login");
    Route::get("/register", 'Store\AuthController@register')->name("store.test.register");
    Route::get("/logout", 'Store\AuthController@logout')->name("store.test.logout");
    Route::post("/login", 'Store\AuthController@postLogin')->name('store.test.login.post');
    Route::post("/register", 'Store\AuthController@postRegistration')->name('store.test.register.post');
    Route::middleware(['store'])->group(function(){
        Route::get("/get_product/{product_id}", 'Store\StoreController@get_product')->name("store.test.get_product");
        Route::get("/dashboard/{page}", 'Store\StoreController@dashboard')->name("store.test.dashboard.page");
        Route::get("/dashboard", 'Store\StoreController@dashboard')->name("store.test.dashboard");
        Route::get("/{store_id}", 'Store\StoreController@products')->where('name', '([A-Za-z]\+)+')->name("store.test.products");
        Route::post("/add_product", 'Store\StoreController@add_product')->name("store.test.add_product");
        Route::post("/edit_product/{product_id}", 'Store\StoreController@edit_product')->name("store.test.edit_product");
        Route::post("/update_profile", 'Store\StoreController@update_profile')->name("store.test.profile.update");

    });
});


Route::get('/', 'Index\IndexController@index')->name('index');

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
    Route::get("/empty", 'Cart\CartController@empty')->name("cart.empty");
    Route::get("/remove/{index}", 'Cart\CartController@remove_item')->name("cart.remove");
    Route::post("/", 'Cart\CartController@add_item')->name("cart.add");
    Route::get("/checkout", 'Cart\CartController@checkout')->name("checkout");
    Route::post("/checkout", 'Cart\CartController@index')->name("postCheckout");
});

Route::group(['prefix' => 'product'], function () {
    Route::get("/", 'Product\ProductController@index');
    Route::get("/{id}", 'Product\ProductController@store')->where('name', '([A-Za-z]\+)+')->name("store");
});

Route::group(['prefix' => 'store'], function () {
    Route::get("/", 'Product\ProductController@index');
    Route::get("/{id}", 'Store\StoreController@products')->where('name', '([A-Za-z]\+)+')->name("products.store");
    Route::get("/{store_id}/product/{product_id}", 'Store\StoreController@product_details')->where('name', '([A-Za-z]\+)+')->name("store.product.details");

});

Route::get('/contact', 'ContactUs\ContactUsController@index')->name('contactus');
Route::get('/about', 'ContactUs\ContactUsController@about')->name('aboutus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/pay', 'Payment\PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'Payment\PaymentController@handleGatewayCallback');

?>
