<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use App\Models\Admin;
use App\Models\Store;
use App\Models\SiteInfo;
use App\Http\Requests\storePost;

class StoreController extends Controller
{
    protected $pages = ["dashboard" => ["name" => "dashboard", "icon" => "flaticon2-analytics-2"],
                  "stores"    => ["name" => "stores",    "icon" => "flaticon-medal"],
                  "products"  => ["name" => "products",  "icon" => "flaticon-app"],
                  "orders"    => ["name" => "orders",    "icon" => "flaticon-shopping-basket"],
                  "customers" => ["name" => "customers", "icon" => "flaticon-users"],
                  "reports"   => ["name" => "reports",   "icon" => "flaticon2-graph"],
                  "profile"   => ["name" => "profile",   "icon" => "flaticon-user"],
                  "settings"  => ["name" => "settings",  "icon" => "flaticon2-settings"]];

    public $site_info = "";

    public function __construct(){
        $this->middleware('admin');
        $this->site_info = SiteInfo::first();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        $stores = Store::all();

        return view('admin.stores.index', ['title' => 'stores', 'pages' => $this->pages, 'admin' => $admin, 'site_info' => $this->site_info, 'stores' => $stores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\storePost  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storePost $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store, Request $request)
    {
        var_dump([$store]);
        if ($request->has('_method') && $request->input('_method') == 'delete'){
            $product = Store::find($store);
            if ($product->images){
                foreach ($product->images as $image){
                    Storage::delete($image->fullpath);
                    $image->delete();
                }
            }
            Store::destroy($store);
            return response()->json(["success" => true, "message" => "Product deleted successfully", "product" => $product]);
        }
        $product = Store::find($store);
        return response()->json(['success' => true, 'store' => $store]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        //
    }
}
