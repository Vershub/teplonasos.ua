@extends('index')
@section('title', 'очередь')
@section('content')
<table class="table table-striped">
    <tr>
        <th scope="col">id</th>
        <th scope="col">task_id</th>
        <th scope="col">status</th>
        <th scope="col">added_on</th>
    </tr>
    @foreach($logs as $log)
    <tr>
        <th scope="row">{{$log->id}}</th>
        <td>{{$log->task_id}}</td>
        <td>{{$log->status}}</td>
        <td>{{$log->added_on}}</td>
    </tr>
    @endforeach
</table>
@endsection