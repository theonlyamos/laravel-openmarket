<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminUpdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Store;
use App\Models\Admin;
use App\Models\Product;
use App\Models\SiteInfo;

class AdminController extends Controller
{
    //
    protected $pages = ["dashboard" => ["name" => "dashboard", "icon" => "flaticon2-analytics-2"],
                  "stores"    => ["name" => "stores",    "icon" => "flaticon-medal"],
                  "products"  => ["name" => "products",  "icon" => "flaticon-app"],
                  "orders"    => ["name" => "orders",    "icon" => "flaticon-shopping-basket"],
                  "customers" => ["name" => "customers", "icon" => "flaticon2-group"],
                  "reports"   => ["name" => "reports",   "icon" => "flaticon2-graph"],
                  "profile"   => ["name" => "profile",   "icon" => "flaticon-user"],
                  "settings"  => ["name" => "settings",  "icon" => "flaticon2-settings"]];

    public $site_info = "";

    public function __construct(){
        $this->middleware(['admin']);
        $this->site_info = SiteInfo::first();
    }

    public function index(){
        return redirect()->route('admin.dashboard');
    }

    public function dashboard($page=""){
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        $products = Product::count();
        $stores = Store::count();
        $users = User::count();

        return view("admin.dashboard.dashboard", ["title" => "dashboard", "pages" => $this->pages, "admin" => $admin, "users" => $users, "stores" => $stores, "products" => $products, "site_info" => $this->site_info]);
    }

    public function page(){
    }

    public function update_profile(AdminUpdate $request){
        $admin_update = $request->validated();
        $admin = Admin::find(Auth::guard('admin')->user()->id);

        if ($request->hasFile('logo')){
            $admin->logo = explode("/", $request->logo->admin("public"))[1];
        }

        $admin->website = $admin_update['website'];
        $admin->phone = $admin_update['phone'];
        $admin->fill($admin_update);
        $admin->save();

        return response()->json(["success" => true, "message" => "Profile updated successfully"]);
    }

    public function stores(Request $request){
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        $stores = Store::all();

        return view('admin.stores.index', ['title' => 'stores', 'pages' => $this->pages, 'admin' => $admin, 'site_info' => $this->site_info, 'stores' => $stores]);
    }

    public function products(Request $request){
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        $products = Product::orderBy('id', 'desc')->paginate(20);
        $min_price = DB::table('products')->min('price');
        $max_price = DB::table('products')->max('price');

        return view('admin.products.index', ['title' => 'products', 'pages' => $this->pages, 'admin' => $admin, 'site_info' => $this->site_info, 'products' => $products, 'min_price' => $min_price, 'max_price' => $max_price]);
    }

    public function product($product_id, Request $request){
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        $site_info = DB::select('select * from site_info');
        $product = Product::find($product_id);
        $keys = $product->keywords;
        $keywords = explode(",", $keys);

        return view('admin.products.details', ['title' => 'products', 'pages' => $this->pages, 'admin' => $admin, 'site_info' => $site_info, 'product' => $product, 'keywords' => $keywords]);
    }

}
