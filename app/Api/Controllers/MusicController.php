<?php

namespace App\Api\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Music;
use App\Models\Album;
use Illuminate\Http\Request;


class MusicController extends BaseController
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * 获取音乐
     *
     * @SWG\get(path="/api/music",
     *   tags={"音乐"},
     *   summary="获取所有",
     *   description="该接口无须登录。",
     *   operationId="index",
     *   produces={"application/json"},
     *   @SWG\Response(response="default", description="操作成功")
     * )
     */
    public function index(Request $request)
    {
        // if($request.headers.)
        if(strtoupper($_SERVER['REQUEST_METHOD'])== 'OPTIONS'){ 
            exit; 
        } 
        if($_SERVER['HTTP_AUTHORIZATION']!='haoting123456kao74b87337454200d4d33f80c4663dc5e5'){
            //发送失败信息.
            //或者跳转到login 之类的其他页面.
            echo "kao";
        }else{

        }

        $res = Music::all();
        foreach ($res as &$re){
            $re->memo = nl2br($re->memo);
//            echo $re->memo;
        }
        return response()->json($res, 200);
    }

    public function save(Request $request){
        echo $request->name;
        echo $request->pass;
        // var_dump($request);
        echo "kao";
        $token = md5("aaaa");
        return $token;
    }


    /**
     * 获取音乐Top5
     *
     * @SWG\get(path="/api/music/top1",
     *   tags={"音乐"},
     *   summary="获取最好听的音乐",
     *   description="该接口无须登录。",
     *   operationId="top1",
     *   produces={"application/json"},
     *   @SWG\Response(response="default", description="操作成功")
     * )
     */
    public function top1(){
        $res = Music::take(1)->get();
        return response()->json($res, 200);
    }

    public function album(){
        $res = Album::all();
        foreach ($res as &$rs){
            $rs->songs = Music::all();
        }
//        $resp = response()->json($res);
//        dd($resp->data);
//        dd($resp);
        return response()->json($res, 200);
    }

}
