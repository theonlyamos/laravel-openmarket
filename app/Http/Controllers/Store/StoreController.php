<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeProductsPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;

use App\Products;

class StoreController extends Controller
{
    //

    public function index(){
        return "Hello World";
    }

    public function products($id, Request $request){
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
            $products = Products::paginate(20);
        }
        $prod = $products[0];
        // $products = DB::select('select * from products limit 20 offset ?', [$from]);
        $store = DB::select('select id, name from stores where id = ?', [$id]);
        $categories = DB::select('select id, name from categories');
        $subcategories = DB::select('select id, name from subcategories');
        $min_price = DB::table('products')->min('price');
        $max_price = DB::table('products')->max('price');
        $store = $store[0];
        return view("store.products", ["products" => $products, "store" => $store,
                                       "categories" => $categories, "subcategories" => $subcategories,
                                       "min_price" => $min_price, "max_price" => $max_price,
                                       "cats" => $cats, "subs" => $subs, "catString" => join(",", $cats)]);
    }

    public function dashboard($id, $page = ""){
        $pages = ["dashboard" => ["name" => "dashboard", "icon" => "flaticon2-analytics-2"],
                  "products"  => ["name" => "products",  "icon" => "flaticon-app"],
                  "orders"    => ["name" => "orders",    "icon" => "flaticon-shopping-basket"],
                  "customers" => ["name" => "customers", "icon" => "flaticon2-group"],
                  "reports"   => ["name" => "reports",   "icon" => "flaticon2-graph"],
                  "profile"   => ["name" => "profile",   "icon" => "flaticon-user"],
                  "settings"  => ["name" => "settings",  "icon" => "flaticon2-settings"]];
        if (!empty($page)){
            $list = '';
            switch ($page) {
                case 'products':
                    $list = Products::all();
            }
            return view("store.dashboard.$page", ["title" => $page, "pages" => $pages, "id" => $id, "list" => $list]);
        }
        return view("store.dashboard.dashboard", ["title" => "dashboard", "pages" => $pages, "id" => $id]);
    }

    public function add_product(storeProductsPost $request){
        $new_product = $request->validated();
        $new_product['thumbnail'] = $request->thumbnail->store("public");
        $product = Products::create($new_product);

        return response()->json(["success" => true, "message" => "Product added successfully", "product" => $product]);

    }
}
