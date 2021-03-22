<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\StoreProduct;
use App\Models\SiteInfo;

class ProductController extends Controller
{
    //
    public $site_info = "";

    public function __construct(){
        $this->site_info = SiteInfo::first();
    }

    public function index(Request $request){
        return redirect("/");
    }

    public function show($id, Request $request){
        $product = StoreProduct::where("slug", $id)->first();
        $keys = $product->product->keywords;
        $keywords = explode(",", $keys);

        $cart = 0;
        $items = $request->session()->get('cart.items', []);
        foreach($items as $item){
            $cart += $item['quantity'];
        }
        return view("product.details", ["product" => $product, "keywords" => $keywords, "site" => $this->site_info, 'cart' => $cart]);
    }
}
