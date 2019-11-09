<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    //

    public function index(){
        return "Hello World";
    }

    public function products($id, Request $request){
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
}
