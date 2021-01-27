<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Store;
use App\Products;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $categories = DB::select('select * from categories');
        $products = Products::orderBy("created_at", "desc")->limit(12)->get();
        $stores = Store::orderBy("created_at", "desc")->get();
        $site_info = DB::select('select * from site_info');
        $cart = count($request->session()->get('cart.items', []));

        return view("welcome", ["categories" => $categories, "stores" => $stores, "products" => $products, "site" => $site_info[0], "cart" => $cart]);
    }
}
