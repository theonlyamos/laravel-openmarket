<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Store;
use App\Models\SiteInfo;
use App\Models\StoreProduct;

class IndexController extends Controller
{
    //

    public function index(Request $request){

        $stores = Store::orderBy("created_at", "desc")->get();
        $site_info = SiteInfo::first();
        $products = StoreProduct::orderBy("created_at", "desc")->limit(12)->get();
        $cart = count($request->session()->get('cart.items', []));
        $categories = DB::select('select * from categories');

        return view("welcome", ["categories" => $categories, "stores" => $stores, "products" => $products, "site" => $site_info, "cart" => $cart]);
    }
}
