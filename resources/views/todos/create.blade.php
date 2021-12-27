@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="/todos" method="post">
            @csrf
            <label for="name">Enter the new Todo List</label> <br/>
            <input type="text" name="name">
            <input type="submit" value="Add New One">
        </form>
    </div>
    
@endsection