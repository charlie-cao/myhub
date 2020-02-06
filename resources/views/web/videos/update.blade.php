@extends('layouts.app')
@section('content')
<link href="{{ asset('css/bootstrap-markdown.min.css') }}" rel="stylesheet">
<div class="container">
        <div class="col-sm-3">
                @component('block.side')
                @endcomponent
                <div class="alert alert-warning alert-dismissible fade in" role="alert" style="margin-top:20px;" >
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <strong>Tips</strong>

                        一个小小的增加和验证就涉及不少问题。
                        表单验证方法，
                        修改消息，
                        $this->validate($request, [
                            'title' => 'required|max:255',
                            'content' => 'required',
                        ],$msg);
                        路由重定向，
                        return redirect('doc');
                        获取默认值，
                        {{ old('content') }}
                        数据存储的异常抛出，
                        try{
                
                        }catch(\Exception $e){
                            abort(404);
                        }
                        Session的获取 
                        session()->all()。 
                        图片存储以及获得
        
                        图片的连带删除
        
                        大文件上传进度
        
                        分页显示
        
                        模糊搜索
        
                        使用laravel自带的功能进行资源管理
        
                        图片存储服务器使用
        
                        富文本编辑器使用
        
                        用户SESSION 集中存储到redis
        
                        短信接口调用                      </div>                
        </div>
        <div class="col-sm-9" style="padding:0px;">
                
              
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif                        
            <div class="box">
                    <form method="post" action="{{url('doc_store')}}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="u_id" id="u_id" value="{{Auth::id()}}"/>
                  <div class="box-header">
                    <b>写文章</b>
                    <div style="float:right">
                    支持makedown语法
                    </div>
                  </div>
                  <div class="box-body">
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="输入文章标题" >
                    <textarea  data-provide="markdown" id="content" name="content" rows="10" placeholder="输入文章内容" >{{ old('content') }}</textarea>
                    Tag
                    私有 公开 标题图片(可选)
                    <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
                
                      <div class="row text-center" style="padding-top:20px;">
                      <button type="button" class="btn btn-default"><a href="{{url('doc')}}">返回列表</a></button>
                      <button type="submit" class="btn btn-default">保存草稿</button>
                      <button type="submit" class="btn btn-default">发布文章</button>
                </div>
            </form>
        </div>
</div>

@endsection
