@extends('index')

@section('title', 'места')

@section('content')
    <a href="/places/add" class="btn btn-success" style="margin: 10px;">добавить место</a>
<div class="container">
    <table class="table table-striped">
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">type</th>
            <th scope="col">view</th>
        </tr>
        @foreach($places as $place)
        <tr>
            <th scope="row">{{ $place->id }}</th>
            <td>{{ $place->name }}</td>
            <td>{{ $place->type }}</td>
            <td><a class="btn btn-info" href="places/{{ $place->id }}">Детальнее</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection