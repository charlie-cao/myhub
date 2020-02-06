@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-3">
                @component('block.side')
                @endcomponent
                <div class="alert alert-warning alert-dismissible fade in" role="alert" style="margin-top:20px;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    <strong>Tips</strong>
                    使用Laravel进行跨页面的传统增删改查
                </div>
            </div>
            <div class="col-sm-9" style="padding:0px;">
                    <ol class="breadcrumb">
                    <li><a href="{{url('doc')}}">文章列表</a></li>
                    <li class="active">我的文章</li>
                    </ol>

                <div class="box">
                    <div class="box-header">
                        <b>我的文章</b>
                        <div style="float:right">
                            {{--{{Request::path()}}--}}
                           @if (Request::path()=='doc')

                            <a href="{{url('doc_create')}}" class="btn btn-primary btn-xs" role="button">
                                <span class="glyphicon glyphicon-pencil"></span>
                                写文章
                            </a>
                            <a href="{{url('doc_trash')}}" class="btn btn-primary btn-xs" role="button">
                                <span class="glyphicon glyphicon-trash"></span>
                                回收站
                            </a>
                            @elseif(Request::path()=='doc_trash')
                                <a href="{{url('doc')}}" class="btn btn-primary btn-xs" role="button">
                                    <span class="glyphicon glyphicon-list"></span>
                                    文章列表
                                </a>

                            @endif


                        </div>
                    </div>

                    <div class="box-body">
                        @foreach ($docs as $doc)
                            <div class="box-row">
                                <h4 class="doc-title">
                                <a href="{{url('doc_view')}}/{{ $doc->id }}">{{ $doc->title }}  {{ $doc->author }}</a> 

                                </h4>
                                {{--<p class="md-text">{{ $doc->content }}</p>--}}
                                <p class="doc-state">
                                    <i class="glyphicon glyphicon-time"></i>
                                    <span>{{ $doc->created_at }}</span>
                                    <i class="glyphicon glyphicon-eye-open"></i>
                                    <span>{{ $doc->view_num }}</span>
                                    <i class="glyphicon glyphicon-heart"></i>
                                    <span>{{ $doc->like_num }}</span>
                                    <i class="glyphicon glyphicon-comment"></i>
                                    <span>{{ $doc->comment_num }}</span>
                                    {{--  <a href="{{url('doc_update')}}" class="btn btn-primary" role="button">修改</a>
                                    <a href="{{url('doc_delete')}}/{{ $doc->id }}" class="btn btn-default" role="button">删除</a>
                                    <a href="{{url('doc_delete')}}/{{ $doc->id }}" class="btn btn-default" role="button">分享</a>
                                    <a href="{{url('doc_delete')}}/{{ $doc->id }}" class="btn btn-default" role="button">收藏</a>  --}}
                                </p>
                            </div>
                        @endforeach
                    </div>
                    <div class="box-footer center">
                        <nav aria-label="Page navigation">
                            {{ $docs->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
