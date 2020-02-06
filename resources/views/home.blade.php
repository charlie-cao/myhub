@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4 ">
            <div class="panel panel-default">
                <div class="panel-heading">我的文件</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    欢迎回来
                </div>
            </div>
        </div>

        <div class="col-sm-4 ">
            <div class="panel panel-default">
                <div class="panel-heading">我的音乐</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    欢迎回来
                </div>
            </div>
        </div>
        
        <div class="col-sm-4 ">
        <ul class="list-group">
        <li class="list-group-item active">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">Vestibulum at eros</li>
      </ul>
        </div>        
    </div>
</div>
@endsection
