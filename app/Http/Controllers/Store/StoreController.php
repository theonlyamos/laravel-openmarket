<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeProductPost;
use App\Http\Requests\storeProductUpdate;
use App\Http\Requests\storeUpdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use App\Models\Store;
use App\Models\SiteInfo;

class StoreController extends Controller
{
    //

    public function index(){

        $site_info = SiteInfo::first();
        $products = Product::orderBy("created_at", "desc")->limit(8)->get();

        return view("store.index2", ["products" => $products, "title" => "Home", "site" => $site_info]);
    }

    public function contact(){
        $site_info = SiteInfo::first();
        return view('contact', ['title' => 'Contact Us', 'site' => $site_info]);
    }

    public function about(){
        $site_info = SiteInfo::first();
        return view('about', ['title' => 'About Us', 'site' => $site_info]);
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
            $products = Product::whereIn('category', $cats)->paginate(20);
        }
        else {
            $products = Product::where("store_id", $store_id)
            ->orderBy("id", "desc")
            ->paginate(20);
        }
        $prod = $products[0];
        // $products = DB::select('select * from products limit 20 offset ?', [$from]);
        $store = Store::find($store_id);
        $location = explode(",", $store->location);
        $items = DB::select('select category from products');
        $categories = [];
        foreach ($items as $item){
            array_push($categories, $item->category);
        }

        $stores = Store::all();
        $categories = array_unique($categories);
        $subcategories = DB::select('select id, name from subcategories');
        $min_price = DB::table('products')->min('price');
        $max_price = DB::table('products')->max('price');
        $site_info = SiteInfo::first();

        return view("store.products", ["products" => $products, "store" => $store, "stores" => $stores,
                                       "categories" => $categories, "subcategories" => $subcategories,
                                       "min_price" => $min_price, "max_price" => $max_price,
                                       "cats" => $cats, "subs" => $subs, "catString" => join(",", $cats), "title" => "Product", "site" => $site_info,
                                       "cart" => count($request->session()->get('cart.items', [])),
                                       "latitude" => $location[0],
                                       "longitude" => $location[1]]);
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
                    $list = Product::where("store_id", Auth::guard('store')->user()->id)
                                    ->orderBy("id", "asc")
                                    ->get();
            }
            return view("store.dashboard.$page", ["title" => $page, "pages" => $pages, "list" => $list, "store" => $store]);
        }
        return view("store.dashboard.dashboard", ["title" => "dashboard", "pages" => $pages, "store" => $store]);
    }

    public function add_product(storeProductPost $request){
        $new_product = $request->validated();
        $new_product['thumbnail'] = explode("/", $request->thumbnail->store("public"))[1];
        $new_product['store_id'] = Auth::guard('store')->user()->id;
        Product::create($new_product);
        $product = Product::where("thumbnail", $new_product['thumbnail'])->first();
        return response()->json(["success" => true, "message" => "Product added successfully", "product" => $product, "title" => "Add Product"]);

    }

    public function product_details($store_id, $product_id, Request $request){
        $product = Product::find($product_id);
        $keys = $product->keywords;
        $keywords = explode(",", $keys);
        $site_info = SiteInfo::first();
        return view("product.details", ["product" => $product, "keywords" => $keywords, "site" => $site_info, 'cart' => count($request->session()->get('cart.items', []))]);
    }

    public function get_product($product_id, Request $request){
        $product = Product::find($product_id);
        return response()->json(["success" => true, "message" => "Product retrieved successfully", "product" => $product]);
    }

    public function edit_product($product_id, storeProductUpdate $request){
        $product_update = $request->validated();
        $product = Product::find($product_id);
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
