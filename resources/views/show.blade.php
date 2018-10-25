@extends('index')

@section('title', 'show place')

@section('content')
<div class="container">
    <h1 class="text-center">Show place</h1>
    <table class="table table-striped">
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">type</th>
            <th scope="col">description</th>
            <th scope="col">image</th>
        </tr>
            <tr>
                <th scope="row">{{ $place->id }}</th>
                <td>{{ $place->name }}</td>
                <td>{{ $place->type }}</td>
                <td>{{ $place->description }}</td>
                <td>image</td>
            </tr>
    </table>
</div>
@endsection