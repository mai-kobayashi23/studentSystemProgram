@extends('layouts.app')

@section('content')
<form action="{{route('student.add')}}" method="post" class="form-horizontal">
    {{ csrf_field() }}
    {{ method_field('patch') }}
    <div class="form-group @if($errors->has('name')) has-error @endif">
        <label for="name" class="col-md-3 control-label">名前</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="name" name="name">
            @if($errors->has('name'))<span class="text-danger">{{ $errors->first('name') }}</span> @endif
        </div>
    </div>
    <div class="form-group @if($errors->has('address')) has-error @endif">
        <label for="address" class="col-md-3 control-label">住所</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="address" name="address">
            @if($errors->has('address'))<span class="text-danger">{{ $errors->first('address') }}</span> @endif
        </div>
    </div>
    <div class="form-group @if($errors->has('img_path')) has-error @endif">
        <label for="img_path" class="col-md-3 control-label">顔写真</label>
        <div class="col-md-9">
            <input type="img_path" class="form-control" id="img_path" name="img_path">
            @if($errors->has('img_path'))<span class="text-danger">{{ $errors->first('img_path') }}</span> @endif
        </div>
    </div>
    <div class="col-md-offset-3 text-center"><button class="btn btn-primary">登録</button></div>
</form>

<div class="col-md-offset-3 text-center"><a href="{{route('user.menu')}}"><button class="btn btn-primary">戻る</button></a></div>

@endsection