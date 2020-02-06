@extends('layouts.app')

@section('content')
<div class="container box" >
    <h1>我的照片
        <small id="addNew" class="btn btn-default text-right">批量上传</small>
        <small id="addNew" class="btn btn-default text-right">自动抓取</small>
        <small id="addNew" class="btn btn-default text-right">智能整理</small>
        <small id="setup" class="btn btn-default text-right">打包下载</small>
    </h1>
    <table class="table">
        <tr>
            <th>日期</th>
            <th>体重</th>
            <th>心肺运动</th>
            <th>仰卧起坐</th>
            <th>俯卧撑</th>
            <th>拉力器</th>
            <th>暴走</th>
            <th>总时长</th>
            <th>其他 </th>
        </tr>
        <tr>
            <td>1月26日</td>
            <td>95.8</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
    </table>
</div>

<div id="addNewModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">增加新习惯</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">名称</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">单位</label>
                        <div class="col-sm-10">
                            <select class="form-control">
                                <option>公斤</option>
                                <option>分钟</option>
                                <option>小时</option>
                                <option>米</option>
                                <option>公里</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">默认值</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="0">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">习惯说明</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="0">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> 补全之前
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">保存</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="setupModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">修改设置</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">提醒次数</label>
                        <div class="col-sm-10">
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">提醒时间</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="0">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">重复提醒</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> 短信提醒
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> 公共号提醒
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> App提醒
                                </label>
                            </div>

                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">保存</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <script>
        $(function () {
            $("#addNew").click(function () {
                $('#addNewModal').modal();
            })
            $("#setup").click(function () {
                $('#setupModal').modal();
            })
        })
    </script>
@endsection
