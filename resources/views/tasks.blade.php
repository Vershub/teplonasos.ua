@extends('index')

@section('title', 'Задачи')

@section('content')
<table class="table table-striped">
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">counter</th>
            <th scope="col">accept</th>
        </tr>
@foreach ($tasks as $task )
        <tr>
            <th scope="row">{{$task->id}}</th>
            <td><a class="btn btn-info" href="/plusc/{{$task->id}}">{{$task->name}}</a></td>
            <td>{{$task->counter}}</td>
            <td><a class="btn btn-info" href="/accept/{{$task->id}}">принять в работу</a></td>
        </tr>
@endforeach
    </table>
@endsection