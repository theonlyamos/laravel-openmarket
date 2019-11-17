<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;

class StoreController extends Controller
{
    //

    public function index(){
        return "Hello World";
    }

    public function products($id, Request $request){
        if ($request->has('categories')){
            $category = $request->query('categories');
        }
        if ($request->has('subcategories')){
            $subcategory = $request->query('subcategories');
        }
        $from = 1;
        $limit = 20;
        $page = 1;
        if ($request->filled('p')){
            $page = $request->query("p");
            $limit = $page*20;
            $from = $limit - 19;
        }
        $products = DB::select('select * from products limit 20 offset ?', [$from]);
        $store = DB::select('select id, name from stores where id = ?', [$id]);
        $categories = DB::select('select id, name from categories');
        $subcategories = DB::select('select id, name from subcategories');
        $min_price = DB::table('products')->min('price');
        $max_price = DB::table('products')->max('price');
        $store = $store[0];
        $num_products = DB::table('products')->distinct('id')->count('id');
        $pagination = number_format(($num_products/20))+1;
        return view("store.products", ["products" => $products, "store" => $store,
                                       "pagination" => $pagination, "page" => $page,
                                       "categories" => $categories, "subcategories" => $subcategories,
                                       "min_price" => $min_price, "max_price" => $max_price]);
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
            return view("store.dashboard.$page", ["title" => $page, "pages" => $pages, "id" => $id]);
        }
        return view("store.dashboard.dashboard", ["title" => "dashboard", "pages" => $pages, "id" => $id]);
    }
}
