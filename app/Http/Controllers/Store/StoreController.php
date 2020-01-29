<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeProductsPost;
use App\Http\Requests\storeProductUpdate;
use App\Http\Requests\storeUpdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Products;
use App\Store;

class StoreController extends Controller
{
    //

    public function index(){
        $site_info = DB::select('select * from site_info');
        $products = Products::orderBy("created_at", "desc")->limit(8)->get();
        return view("store.index2", ["products" => $products, "title" => "Home", "site" => $site_info[0]]);
    }

    public function contact(){
        $site_info = DB::select('select * from site_info');
        return view('contact', ['title' => 'Contact Us', 'site' => $site_info[0]]);
    }

    public function about(){
        $site_info = DB::select('select * from site_info');
        return view('about', ['title' => 'About Us', 'site' => $site_info[0]]);
    }

    public function products($store_id, Request $request){
        $cats = Array();
        $subs = Array();
        if ($request->has('categories')){
            $cats = explode(",", $request->query('categories'));
        }
        if ($request->has('subcategories')){
            $subs = explode(",", $request->query('subcategories'));
        }

        if (count($cats)){
            $products = Products::whereIn('category', $cats)->paginate(20);
        }
        else {
            $products = Products::where("store_id", $store_id)
            ->orderBy("id", "desc")
            ->paginate(20);
        }
        $prod = $products[0];
        // $products = DB::select('select * from products limit 20 offset ?', [$from]);
        $store = Store::find($store_id);
        $categories = DB::select('select id, name from categories');
        $subcategories = DB::select('select id, name from subcategories');
        $min_price = DB::table('products')->min('price');
        $max_price = DB::table('products')->max('price');
        $site_info = DB::select('select * from site_info');
        return view("store.products", ["products" => $products, "store" => $store,
                                       "categories" => $categories, "subcategories" => $subcategories,
                                       "min_price" => $min_price, "max_price" => $max_price,
                                       "cats" => $cats, "subs" => $subs, "catString" => join(",", $cats), "title" => "Products", "site" => $site_info[0],
                                       "cart" => count($request->session()->get('cart.items', []))]);
    }

    public function dashboard($page = ""){
        $pages = ["dashboard" => ["name" => "dashboard", "icon" => "flaticon2-analytics-2"],
                  "products"  => ["name" => "products",  "icon" => "flaticon-app"],
                  "orders"    => ["name" => "orders",    "icon" => "flaticon-shopping-basket"],
                  "customers" => ["name" => "customers", "icon" => "flaticon2-group"],
                  "reports"   => ["name" => "reports",   "icon" => "flaticon2-graph"],
                  "profile"   => ["name" => "profile",   "icon" => "flaticon-user"],
                  "settings"  => ["name" => "settings",  "icon" => "flaticon2-settings"]];
        $store = Auth::guard('store')->user();
        if (!empty($page)){
            $list = '';
            switch ($page) {
                case 'products':
                    $list = Products::where("store_id", Auth::guard('store')->user()->id)
                                    ->orderBy("id", "asc")
                                    ->get();
            }
            return view("store.dashboard.$page", ["title" => $page, "pages" => $pages, "list" => $list, "store" => $store]);
        }
        return view("store.dashboard.dashboard", ["title" => "dashboard", "pages" => $pages, "store" => $store]);
    }

    public function add_product(storeProductsPost $request){
        $new_product = $request->validated();
        $new_product['thumbnail'] = explode("/", $request->thumbnail->store("public"))[1];
        $new_product['store_id'] = Auth::guard('store')->user()->id;
        Products::create($new_product);
        $product = Products::where("thumbnail", $new_product['thumbnail'])->first();
        return response()->json(["success" => true, "message" => "Product added successfully", "product" => $product, "title" => "Add Product"]);

    }

    public function product_details($store_id, $product_id, Request $request){
        $product = Products::find($product_id);
        $keys = $product->keywords;
        $keywords = explode(",", $keys);
        $site_info = DB::select('select * from site_info');
        return view("product.details", ["product" => $product, "keywords" => $keywords, "site" => $site_info[0], 'cart' => count($request->session()->get('cart.items', []))]);
    }

    public function get_product($product_id, Request $request){
        $product = Products::find($product_id);
        return response()->json(["success" => true, "message" => "Product retrieved successfully", "product" => $product]);
    }

    public function edit_product($product_id, storeProductUpdate $request){
        $product_update = $request->validated();
        $product = Products::find($product_id);
        if ($request->hasFile('thumbnail')){
            $product->thumbnail['thumbnail'] = explode("/", $request->thumbnail->store("public"))[1];
        }
        $product->fill($product_update);
        $product->save();
        return response()->json(["success" => true, "message" => "Product updated successfully", "product" => $product]);
    }

    public function update_profile(storeUpdate $request){
        $store_update = $request->validated();
        $store = Store::find(Auth::guard('store')->user()->id);

        if ($request->hasFile('logo')){
            $store->logo = explode("/", $request->logo->store("public"))[1];
        }

        $store->website = $store_update['website'];
        $store->phone = $store_update['phone'];
        $store->fill($store_update);
        $store->save();

        return response()->json(["success" => true, "message" => "Profile updated successfully"]);
    }
}
