<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;
// use Illuminate\Routing\Controller as BaseController;
use App\Models\Doc;

class VideoController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /*
        显示所有和分页
    */
    public function index()
    {
        /* 获取本用户的文章标题列表 */
        $res = Doc::where("u_id", Auth::id())->orderBy('created_at', "desc")->paginate(3);
        return view('web.videos.list', ['docs' => $res]);
    }

    /*
        增加
     */
    public function create()
    {
        // var_dump(session()->all());
        // var_dump(Session::get('title'));
        return view('web.docs.create');
    }

    public function store(Request $request)
    {
        $msg = [
            'title.required' => '标题不能为空',
            'title.max' => '标题不能大于255个字符',
            // 'title.max' => ':attribute 不能多于255个字符.',
            'content.required' => '内容不能为空.'
        ];

        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required',
        ], $msg);

        //检测通过保存到数据库
        try {

            if ($request->file('image') != null) {
                $path = $request->file('image')->store('image');
            } else {
                $path = "";
            }


            $doc = new Doc;
            $doc->u_id = $request->u_id;

            $doc->image = $path;

            $doc->title = $request->title;
            $doc->content = $request->content;
            // $doc->ee = "111";
            $doc->save();
        } catch (\Exception $e) {

            abort(404);
            // dd($e);

        }

        //重定向到列表页
        return redirect('doc');
    }

    /*
        修改
     */
    public function update($id)
    {


    }

    /*
        删除
     */
    public function delete($id)
    {
        $doc = new Doc;
        $doc->destroy($id);

        return redirect('doc');
    }

    /*
        搜索
     */
    public function search()
    {

    }
}
