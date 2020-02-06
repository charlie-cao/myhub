<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Music;

class MusicController extends BaseController
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * 假设是项目中的一个API
     *
     * @SWG\Put(path="/swagger/music",
     *   tags={"音乐"},
     *   summary="获取一些好听的音乐",
     *   description="请求该接口需要先登录。",
     *   operationId="index",
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *     in="formData",
     *     name="reason",
     *     type="string",
     *     description="获取所有音乐信息",
     *     required=true,
     *   ),
     *   @SWG\Response(response="default", description="操作成功")
     * )
     */
    public function index()
    {
        $res = Music::all();
        // return response()->json($res, 200);
        // var_dump($res);
        return view('web.musics.list',['musics' => $res]);
    }

    /* 添加音乐
     */
    public function add(){

    }
}
