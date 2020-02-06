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
                    音乐播放器 使用VUE 构建的SAP程序
                </div>
            </div>
            <div class="col-sm-6">
                <div class="box">
                    <div class="box-header">游戏</div>
                    <div class="box-body " style="text-align: center">
                        <iframe id="phone" name="phone" scrolling="no"
                                src="http://www.isqgame.com/app/cl/dds/release/index.html"></iframe>
                    </div>
                    <div class="box-footer"></div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="box">
                    <div class="box-header">列表</div>
                    <div class="box-body">
                        <ol>
                            <li><img src="" alt=""><span><a target="phone"
                                                            href="http://www.isqgame.com/app/cl/dds/release/index.html">打地鼠</a></span>
                            </li>
                            <li><img src="" alt=""><span><a target="phone"
                                                            href="http://www.isqgame.com/app/zm/xsn/release/">找不同</a></span>
                            </li>
                            <li><img src="" alt=""><span><a target="phone"
                                                            href="http://www.isqgame.com/app/zm/bjh/release/">我爱爆菊</a></span>
                            </li>
                        </ol>
                    </div>
                    <div class="box-footer"></div>
                </div>
            </div>
        </div>

    </div>
    <style>
        #phone {
            width: 480px;
            height: 800px;
            border: none;
            overflow: hidden;
        }
    </style>
@stop
