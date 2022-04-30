<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\storeProductPost;
use App\Http\Requests\storeProductUpdate;
use App\Http\Requests\storeUpdate;

use App\Models\StoreProduct;
use App\Models\Store;
use App\Models\SiteInfo;

class StoreController extends Controller
{
    protected $pages = ["dashboard" => ["name" => "dashboard", "icon" => "flaticon2-analytics-2"],
                  "product"  => ["name" => "product",  "icon" => "flaticon-app"],
                  "orders"    => ["name" => "orders",    "icon" => "flaticon-shopping-basket"],
                  "customers" => ["name" => "customers", "icon" => "flaticon2-group"],
                  "reports"   => ["name" => "reports",   "icon" => "flaticon2-graph"],
                  "profile"   => ["name" => "profile",   "icon" => "flaticon-user"],
                  "settings"  => ["name" => "settings",  "icon" => "flaticon2-settings"]];

    public $site_info = "";

    public function __construct(){
        $this->site_info = SiteInfo::first();
    }

    public function index(){

        $site_info = SiteInfo::first();
        $products = StoreProduct::orderBy("created_at", "desc")->limit(8)->get();

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

    public function products($slug, Request $request){
        $cats = Array();
        $subs = Array();
        if (Auth::guard('store'))
            $store = Auth::guard('store')->user();
        else
          $store = Store::find($slug);
        if ($request->has('categories')){
            $cats = explode(",", $request->query('categories'));
        }
        if ($request->has('subcategories')){
            $subs = explode(",", $request->query('subcategories'));
        }

        if (count($cats)){
            $products = StoreProduct::whereIn('category', $cats)->paginate(20);
        }
        else {
            $products = StoreProduct::where("store_id", $store->id)
            ->orderBy("id", "desc")
            ->paginate(20);
        }
        $prod = $products[0];
        // $products = DB::select('select * from products limit 20 offset ?', [$from]);
        $location = explode(",", $store->location);
        $items = DB::select('select category from products');
        $categories = [];
        foreach ($items as $item){
            array_push($categories, $item->category);
        }

        $stores = Store::all();
        $categories = array_unique($categories);
        $subcategories = DB::select('select id, name from subcategories');
        $min_price = DB::table('store_products')->min('price');
        $max_price = DB::table('store_products')->max('price');
        $site_info = SiteInfo::first();

        return view("store.products", ["products" => $products, "store" => $store, "stores" => $stores,
                                       "categories" => $categories, "subcategories" => $subcategories,
                                       "min_price" => $min_price, "max_price" => $max_price,
                                       "cats" => $cats, "subs" => $subs, "catString" => join(",", $cats), "title" => "Product", "site" => $site_info,
                                       "cart" => count($request->session()->get('cart.items', [])),
                                       "latitude" => $location[0],
                                       "longitude" => $location[1]]);
    }

    public function dashboard(){
        $store = Auth::guard('store')->user();
        return view("store.dashboard.dashboard", ["title" => "dashboard", "pages" => $this->pages, "store" => $store]);
    }

    public function page(){
    }

    public function add_product(storeProductPost $request){
        $new_product = $request->validated();
        $new_product['thumbnail'] = explode("/", $request->thumbnail->store("public"))[1];
        $new_product['store_id'] = Auth::guard('store')->user()->id;
        StoreProduct::create($new_product);
        $product = StoreProduct::where("thumbnail", $new_product['thumbnail'])->first();
        return response()->json(["success" => true, "message" => "Product added successfully", "product" => $product, "title" => "Add Product"]);

    }

    public function product_details($store_id, $product_id, Request $request){
        $product = StoreProduct::where('slug', $product_id)->first();
        $keys = $product->product->keywords;
        $keywords = explode(",", $keys);
        $site_info = SiteInfo::first();
        return view("product.details", ["product" => $product, "keywords" => $keywords, "site" => $site_info, 'cart' => count($request->session()->get('cart.items', []))]);
    }

    public function get_product($product_id, Request $request){
        $product = StoreProduct::find($product_id);
        return response()->json(["success" => true, "message" => "Product retrieved successfully", "product" => $product]);
    }

    public function edit_product($product_id, storeProductUpdate $request){
        $product_update = $request->validated();
        $product = StoreProduct::find($product_id);
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
