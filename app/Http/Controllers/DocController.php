<?php

namespace App\Http\Controllers;

use App\Notifications\InvoicePaid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Router;
//use Illuminate\Support\Facades\Route as Route;

use Illuminate\Support\Facades\Storage;
// use Illuminate\Routing\Controller as BaseController;
use App\Models\Doc;

class DocController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }

    /*
        显示所有和分页
    */
    public function index(Request $request)
    {
//        $commands = array('ls');
//        SSH::run($commands);
//        dd(today());
        /* 获取本用户的文章标题列表 */
//        $method = Request::getMethod();
//        $pathInfo = Request::getPathInfo();
//        $currentRoute = $this->getRoutes()[$method.$pathInfo];

//        echo $currentRoute['action']['as'];

//         dd(Route::currentRouteName()) ;
//        dd($request->route()->uri);

        try{
            $res = Doc::where("u_id", Auth::id())->orderBy('created_at', "desc")->paginate(10);
        }catch(\Exception $e){
            dd($e->getMessage());
        }


        // dd(gettype($res));



        
        // var_dump(gettype($res));
        // var_dump(gettype($res));
        // var_dump(gettype($res));
        // var_dump(gettype($res));

        foreach($res as &$r){
            if($r->tags!=""){
                $r->tags = explode(" ",$r->tags);
                // dd($r->tags);
            }else{
                $r->tags =[];
            }
        }
// dd($res);
        return view('web.docs.list', ['docs' => $res]);
    }

    /**
     * 回收站
     */
    public function trash(){
//        echo Route::current();
        $res = Doc::onlyTrashed()->where("u_id", Auth::id())->orderBy('created_at', "desc")->paginate(5);
//        dd($res);
        return view('web.docs.list', ['docs' => $res]);
    }

    public function restore($id){
        $doc = Doc::withTrashed()->find($id);
        $doc->restore();
        return redirect('doc_trash');
    }

    /*
        增加
     */
    public function create()
    {
        return view('web.docs.create');
    }

    public function view($id){
        $doc = Doc::withTrashed()->find($id);

        $doc->view_num++;
        $doc->save();

        return view('web.docs.view',['doc'=>$doc]);
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


            if(!$request->id){
                $doc = new Doc;
                $doc->u_id = $request->u_id;
            }else{
                // dd($request);
                $doc = Doc::find($request->id);
            }

            $doc->image = $path;
            $doc->public = $request->public;
            $doc->title = $request->title;
            $doc->tags = $request->tags;
            $doc->content = $request->content;
            $doc->save();

        } catch (\Exception $e) {

            abort(404);
            // dd($e);

        }

        //重定向到列表页
        return redirect('doc_view/'.$doc->id);
    }

    /*
        修改
     */
    public function update($id)
    {
        //获取文章信息 
        $doc = Doc::withTrashed()->find($id);

        //显示到view
        return view('web.docs.update',['doc'=>$doc]);
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
