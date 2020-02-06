@extends('layouts.app_vue')
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
                    vue vue-route vuex vue-scorll less
                </div>
            </div>
            <div class="col-sm-9">
                <div class="box">
                    <div class="box-header">
                        <router-link to="/player">播放</router-link>
                        <router-link to="/album">专辑</router-link>
                        <router-link to="/upload">上传</router-link>
                        <router-link to="/testvue">VUETEST</router-link>
                        <router-link to="/vuelesson">VueLesson</router-link>
                    </div>
                    <router-view></router-view>
                    <div class="box-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
