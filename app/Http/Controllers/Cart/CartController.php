<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;

use App\Models\Cart;
use App\Models\Store;
use App\Models\SiteInfo;
use App\Models\StoreProduct;

class CartController extends Controller
{
    public $site_info = "";

    public function __construct(){
        $this->site_info = SiteInfo::first();
    }

    public function index(Request $request){
        $items = $request->session()->get('cart.items');
        $stores = Store::all();
        $items = $request->session()->get('cart.items', []);
        $products = [];
        $total = 0.00;
        $quantity = 0;
        if ($items){
            foreach ($items as $item){
                $product = StoreProduct::find($item['id']);
                $product->quantity = $item['quantity'];
                $total += $product->price * $product->quantity;
                $quantity += $item['quantity'];
                array_push($products, $product);

            }
        }
        return view("cart.cart_items", ["title" => "Cart",
                                        "site" => $this->site_info,
                                        "stores" => $stores,
                                        "cart" => $quantity,
                                        "products" => $products,
                                        "total" => $total]);
    }

    public function add_item(Request $request){
        if ($request->session()->has('cart')){

            $items = $request->session()->get('cart.items');
            $cart = [];
            $in_cart = false;
            if (count($items)){
                foreach($items as $item){
                    if ($item['id'] == $request->id){
                        $item['quantity'] += $request->quantity;
                        $in_cart = true;
                    }
                    array_push($cart, $item);
                }
            }

            if (!$in_cart){
                array_push($cart, ['id' => $request->id, 'quantity' => $request->quantity]);
            }

            $request->session()->put('cart', ['items' => $cart]);
            //$request->session()->push('cart.items', ['id' => $request->id, 'quantity' => $request->quantity]);
        }
        else
            $request->session()->put('cart', ['items' => [['id' => $request->id, 'quantity' => $request->quantity]]]);
        $buy = $request->buy;
        return response()->json(["success" => true, 'cart' => $request->session()->get('cart.items', []), "buy" => $buy]);
    }

    public function remove_item($index, Request $request){
        $cart = $request->session()->get('cart.items', []);
        array_splice($cart, $index, 1);
        $request->session()->put('cart.items', $cart);
        return redirect("/cart");
    }

    public function empty(Request $request){
        $request->session()->forget('cart');
        return redirect('/');
    }

    public function checkout(){
        return view("cart.checkout", ["title" => "Checkout", "site" => $this->site_info]);
    }
}
