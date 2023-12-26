@extends('layouts.app')

@section('content')
<div class="page-header" style="margin-top:-30px;padding-bottom:0px;">
    <h1><small>学生一覧</small></h1>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>学年</th>
            <th>名前</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{$student->grade}}</td>
            <td>{{$student->name}}</td>
            <td>
                <a href="" class="btn btn-primary btn-sm">詳細</a>
            </td>
        </tr>
        @endforeach
    </tbody>

    <p>検索フォームが入ります</p>
    <a href="" class="btn btn-primary btn-sm">学生名</a>
    <a href="" class="btn btn-primary btn-sm">学年</a>

</table>

<div class="col-md-offset-3 text-center"><a href="{{route('user.menu')}}"><button class="btn btn-primary">戻る</button></a></div>


<!-- page control -->
{!! $students->render() !!}
@endsection