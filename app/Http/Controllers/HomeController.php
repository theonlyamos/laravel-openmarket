<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $products = DB::select('select * from products LIMIT 12');
        $stores = DB::select('select * from stores');
        $site_info = DB::select('select * from site_info');

        return view("welcome", ["categories" => $categories, "stores" => $stores, "products" => $products, "site" => $site_info[0], "cart" => count($request->session()->get('cart.items', []))]);
    }
}
