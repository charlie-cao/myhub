@extends('layouts.app')
@section('content')
    <link href="http://vjs.zencdn.net/6.6.3/video-js.css" rel="stylesheet">

    <!-- If you'd like to support IE8 -->
    <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @component('block.side')
                @endcomponent
                <div class="alert alert-warning alert-dismissible fade in" role="alert" style="margin-top:20px;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    <strong>Tips</strong>
                    视频播放
                </div>
            </div>
            <div class="col-sm-9" style="padding:0px;">
                <div class="box">
                    <div class="box-header">
                        <b>我的影片</b>
                        <div style="float:right">
                            <a href="#" id="upload" class="btn btn-primary btn-xs" role="button">
                                <span class="glyphicon glyphicon-pencil"></span>
                                发布影片
                            </a>
                        </div>
                    </div>
                    <div class="box-body">
                        <label>哈利波特 </label>
                        <video id="player" src="./uploads/videos/ls.rmvb" controls="controls" style="width:100%">
                            您的浏览器不支持 video 标签。
                        </video>
                        <div>
                            <ul>
                                <li><a href="javascript：void(0)" class="video-sm" src="./uploads/videos/hlbt.mkv">伏地魔</a></li>
                                <li><a href="javascript：void(0)" class="video-sm" src="./uploads/videos/xmhyj.mkv">寻梦环游记</a></li>
                                <li><a href="javascript：void(0)" class="video-sm" src="./uploads/videos/zl.mkv">追龙</a></li>
                            </ul>

                        </div>
                        <label>js video</label>
                    </div>
                    <div class="box-footer center">
                    </div>

                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">上传视频</h4>
                                </div>
                                <div class="modal-body">
                                    拖拽视频文件到这里
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                    <button type="button" class="btn btn-primary">开始上传</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            $("#upload").click(function () {
                $('#myModal').modal();
            });
            $(".video-sm").click(function () {
                $("#player").attr("src",$(this).attr("src"));
                $("#player").trigger("play");
                return false;

            })
        });
    </script>
@endsection
