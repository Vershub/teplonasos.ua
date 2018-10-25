@extends('index')

@section('title', 'create places')

@section('content')
    <form action="/places/create" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="name"><br>
        <select name="type">
            <option value="1">gorod</option>
            <option value="2">gory</option>
            <option value="3">vodoemy</option>
        </select><br>
        <textarea name="description" id="" cols="30" rows="5" placeholder="enter your description"></textarea>
        <input type="file" name="image">
        <br><input type="submit" name="submit">
    </form>
@endsection