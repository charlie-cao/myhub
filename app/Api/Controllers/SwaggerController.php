<?php

namespace App\Api\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SwaggerController extends Controller
{
    /**
     * 返回JSON格式的Swagger定义
     *
     * 这里需要一个主`Swagger`定义：
     * @SWG\Swagger(
     *   @SWG\Info(
     *     title="My-Hub API文档",
     *     version="0.0.1"
     *   )
     * )
     */
    public function getJSON()
    {
        // 你可以将API的`Swagger Annotation`写在实现API的代码旁，从而方便维护，
        // `swagger-php`会扫描你定义的目录，自动合并所有定义。这里我们直接用`Controller/`
        // 文件夹。
        $swagger = \Swagger\scan(app_path('Api/Controllers/'));

        return response()->json($swagger, 200);
    }




}
