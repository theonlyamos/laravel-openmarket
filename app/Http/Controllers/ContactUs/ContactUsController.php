<?php

namespace App\Http\Controllers\ContactUs;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    //

    public function index(){
        $site_info = DB::select('select * from site_info');
        return view('contact', ['site' => $site_info[0]]);
    }
}
