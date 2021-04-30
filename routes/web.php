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
        Route::prefix('product')->group(function () {
            Route::get('/search', 'Store\ProductController@search')->name('store.product.search');
        });
        Route::resource('product', 'Store\ProductController')->names([
            'index'   => 'store.products',
            'store'   => 'store.product.create',
            'show'    => 'store.product.get',
            'update'  => 'store.product.update',
            'destroy' => 'store.product.destroy'
        ]);


        Route::get('/dashboard', 'Store\StoreController@dashboard')->name('store.dashboard');
        Route::get('/{page}', 'Store\StoreController@page')->name('store.dashboard.page');
        Route::post("/update_profile", 'Store\StoreController@update_profile')->name("store.profile.update");

    });
});



Route::domain('admin.openmartgh.com')->group(function(){
    Route::get("/", 'Admin\AdminController@index')->name("admin.index");
    Route::get("/dashboard", 'Admin\AdminController@dashboard')->name("admin.dashboard");
    Route::get("/login", 'Admin\AuthController@index')->name("admin.login");
    Route::get("/logout", 'Admin\AuthController@logout')->name("admin.logout");
    Route::post("/login", 'Admin\AuthController@postLogin')->name('admin.login.post');
    Route::resource('stores', 'Admin\StoreController')->names([
        'index'   => 'admin.stores',
        'store'   => 'admin.stores.create',
        'show'    => 'admin.stores.get',
        'update'  => 'admin.stores.update',
        'destroy' => 'admin.stores.destroy'
    ]);
    Route::resource('products', 'Admin\ProductController')->names([
        'index'   => 'admin.products',
        'store'   => 'admin.product.create',
        'show'    => 'admin.product.get',
        'update'  => 'admin.product.update',
        'destroy' => 'admin.product.destroy'
    ]);
    Route::resource('customers', 'Admin\UserController')->names([
        'index'   => 'admin.customers',
        'store'   => 'admin.customer.create',
        'show'    => 'admin.customer.get',
        'update'  => 'admin.customer.update',
        'destroy' => 'admin.customer.destroy'
    ]);
    Route::get('/{page}', 'Admin\AdminController@page')->name('admin.dashboard.page');
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

Route::group(['prefix' => 'products'], function () {
    Route::get("/{id:slug}", 'Product\ProductController@show')->where('name', '([A-Za-z]\+)+')->name("products.show");
});

Route::group(['prefix' => 'store'], function () {
    Route::get("/", 'Product\ProductController@index');
    Route::get("/{id}", 'Store\StoreController@products')->where('name', '([A-Za-z]\+)+')->name("products.store");
    Route::get("/{store_id:slug}/product/{product_id:slug}", 'Store\StoreController@product_details')->where('name', '([A-Za-z]\+)+')->name("store.product.details");
});

Route::get('/contact', 'ContactUs\ContactUsController@index')->name('contactus');
Route::get('/about', 'ContactUs\ContactUsController@about')->name('aboutus');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/pay', 'Payment\PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'Payment\PaymentController@handleGatewayCallback');

?>
