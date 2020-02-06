<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Music;

class LikeController extends BaseController
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        return view('web.like');
    }

}
