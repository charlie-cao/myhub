<?php

namespace App\Mobile\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Music;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        // 返回
        $allDoc = Music::all();
//        return $allDoc;
        return view('mobile.home');
    }
    public function vux()
    {
        // 返回
//        $allDoc = Music::all();
//        return $allDoc;
        return view('mobile.vux');
    }

}
