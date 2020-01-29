<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Cart;
use App\Products;
use Illuminate\Contracts\Session\Session;

class CartController extends Controller
{
    //

    public function index(Request $request){
        $site_info = DB::select('select * from site_info');
        $items = $request->session()->get('cart.items', []);
        $products = [];
        $total = 0.00;
        if ($items){
            foreach ($items as $item){
                $product = Products::find($item['id']);
                $product->quantity = $item['quantity'];
                $total += $product->price * $product->quantity;
                array_push($products, $product);
            }
        }

        return view("cart.cart_items", ["title" => "Cart",
                                        "site" => $site_info[0],
                                        "cart" => count($request->session()->get('cart.items', [])),
                                        "products" => $products,
                                        "total" => $total]);
    }

    public function add_item(Request $request){
        if ($request->session()->has('cart'))
            $request->session()->push('cart.items', ['id' => $request->id, 'quantity' => $request->quantity]);
        else
            $request->session()->put('cart', [['id' => $request->id, 'quantity' => $request->quantity]]);
        return response()->json(["success" => true, 'cart' => count($request->session()->get('cart.items', []))]);
    }

    public function remove_item($index, Request $request){
        $cart = $request->session()->get('cart.items', []);
        array_splice($cart, $index, 1);
        $request->session()->put('cart.items', $cart);
        return redirect("/cart");
    }

    public function checkout(){
        $site_info = DB::select('select * from site_info');
        return view("cart.checkout", ["title" => "Checkout", "site" => $site_info[0]]);
    }
}
