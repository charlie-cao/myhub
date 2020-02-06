<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Music;

class DiscoverController extends BaseController
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        return view('web.discover');
    }

    /* 添加音乐
     */
    public function add(){

    }
}
