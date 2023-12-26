@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">メニュー</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                学年更新
                            </button>

                            <a href="{{route('student.new')}}"><button type="submit" class="btn btn-primary">
                                    学生登録
                                </button></a>

                            <a href="{{route('student.show')}}"><button type="submit" class="btn btn-primary">
                                    学生表示
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection