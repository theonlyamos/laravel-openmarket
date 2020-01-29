<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //

    public function index(Request $request){
        return redirect("/");
    }

    public function details($id, Request $request){
        $product = Products::where("id", $id)->first();
        $keys = $product->keywords;
        $keywords = explode(",", $keys);
        $site = DB::select('select * from site_info');
        return view("product.details", ["product" => $product, "keywords" => $keywords, "site" => $site[0], 'cart' => count($request->session()->get('cart.items', []))]);
    }
}
