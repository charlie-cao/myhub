@extends('layouts.app')
@section('content')
<div class="container">
        <div class="col-sm-3">
                @component('block.side')
                @endcomponent
        </div>
        <div class="col-sm-9" style="padding:0px;">
                            <ol class="breadcrumb">
                    <li><a href="{{url('doc')}}">文章列表</a></li>
                    <li class="active">文章详情</li>
                    </ol>

            <div class="box">
                  <div class="box-header">
                      文章详情

                      <div style="float:right">
                          @if(!$doc->trashed())
                          <a href="{{url('doc/update')}}/{{ $doc->id }}" class="btn btn-primary btn-xs" role="button">
                              <span class="glyphicon glyphicon-pencil"></span>
                              修改
                          </a>
                          <a id="btn_delete" href="{{url('doc_delete')}}/{{ $doc->id }}" class="btn btn-primary btn-xs" role="button">
                              <span class="glyphicon glyphicon-trash"></span>
                              删除
                          </a>
                          @else
                              <a href="{{url('doc_restore')}}/{{ $doc->id }}" class="btn btn-primary btn-xs" role="button">
                                  <span class="glyphicon glyphicon-retweet"></span>
                                  还原
                              </a>
                          @endif
                      </div>
                  </div>
                  <div class="box-body">
                      <h1>                      {{$doc->title}}
                      </h1>
                      <p class="doc-state">
                          <i class="glyphicon glyphicon-time"></i>
                          <span>{{ $doc->created_at }}</span>
                          <i class="glyphicon glyphicon-eye-open"></i>
                          <span>{{ $doc->view_num }}</span>
                          <i class="glyphicon glyphicon-heart"></i>
                          <span>{{ $doc->like_num }}</span>
                          <i class="glyphicon glyphicon-comment"></i>
                          <span>{{ $doc->comment_num }}</span>
                      </p>
                      <p class="md-text">{{$doc->content}}</p>
                  </div>
        </div>
</div>

    {{--<script src="{{ asset('js/markdown.js') }}"></script>--}}

    <script src="{{ asset('marked/marked.min.js') }}"></script>
    <script>
        $(function () {
            //使用 上面两个js都可以解析markdown文件但是都有问题 > 无法正常解析
            $(".md-text").each(function () {
                    var mk = marked($(this).html());
                    $(this).html(mk);
                }
            );

            $("#btn_delete").click(function(){
                if(confirm("确定要删除这篇文档么?")){
                    return true;
                }else{
                    return false;
                }
            })
        })
    </script>
@endsection
