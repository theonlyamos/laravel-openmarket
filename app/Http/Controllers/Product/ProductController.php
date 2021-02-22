<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Product;
use App\Models\SiteInfo;

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
        $site_info = SiteInfo::first();
        return view("product.details", ["product" => $product, "keywords" => $keywords, "site" => $site_info, 'cart' => count($request->session()->get('cart.items', []))]);
    }
}
