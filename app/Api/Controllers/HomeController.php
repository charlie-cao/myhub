<?php

namespace App\Api\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doc;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * 首页
     *
     * @SWG\Put(path="api/",
     *   tags={"授权"},
     *   summary="返回接口列表",
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
        // 返回
        $allDoc = Doc::all();
        return $allDoc;
    }

    /**
     * 用户授权
     *
     * @SWG\Put(path="api/auth",
     *   tags={"授权"},
     *   summary="返回接口列表",
     *   description="请求该接口需要先登录。",
     *   operationId="auth",
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
    public function auth(){

    }

    /**
     * 首页
     *
     * @SWG\get(path="api/login",
     *   tags={"授权"},
     *   summary="登录系统",
     *   description="已注册用户登录并获取Token",
     *   operationId="login",
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *     in="formData",
     *     name="username",
     *     type="string",
     *     description="用户名",
     *     required=true,
     *   ),
     *   @SWG\Parameter(
     *     in="formData",
     *     name="password",
     *     type="string",
     *     description="密码",
     *     required=true,
     *   ),
     *   @SWG\Response(response="200", description="返回Token")
     * )
     */
    public function login(){

    }

    /**
     * 注册
     *
     * @SWG\Put(path="api/regist",
     *   tags={"授权"},
     *   summary="注册用户",
     *   description="输入用户名和密码进行用户注册。",
     *   operationId="regist",
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *     in="formData",
     *     name="username",
     *     type="string",
     *     description="用户名",
     *     required=true,
     *   ),
     *   @SWG\Parameter(
     *     in="formData",
     *     name="password",
     *     type="string",
     *     description="用户密码",
     *     required=true,
     *   ),
     *   @SWG\Parameter(
     *     in="formData",
     *     name="email",
     *     type="string",
     *     description="用户邮箱",
     *     required=true,
     *   ),
     *   @SWG\Parameter(
     *     in="formData",
     *     name="phone_num",
     *     type="string",
     *     description="用户电话",
     *   ),
     *  @SWG\Response(response="200", description="注册成功")
     * )
     */
    public function regist(){

    }

    /**
     * 注销
     *
     * @SWG\Delete(path="api/logout",
     *   tags={"授权"},
     *   summary="注销用户",
     *   description="根据Token注销用户登录状态。",
     *   operationId="logout",
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *     in="formData",
     *     name="username",
     *     type="string",
     *     description="用户名",
     *     required=true,
     *   ),
     *   @SWG\Parameter(
     *     in="formData",
     *     name="password",
     *     type="string",
     *     description="用户密码",
     *     required=true,
     *   ),
     *   @SWG\Parameter(
     *     in="formData",
     *     name="email",
     *     type="string",
     *     description="用户邮箱",
     *     required=true,
     *   ),
     *   @SWG\Parameter(
     *     in="formData",
     *     name="phone_num",
     *     type="string",
     *     description="用户电话",
     *   ),
     *  @SWG\Response(response="200", description="注册成功")
     * )
     */
    public function logout(){

    }

}
