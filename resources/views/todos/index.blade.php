@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="m-10 p-10">Todo Lists</h1>
        <ul class="list-group">
            @foreach ($todos as $todo)
                <li class="list-group-item"> {{ $todo->name }} </li>
            @endforeach
        </ul>
        <a href="/todos/create" class="btn btn-primary">Add new Todo</a>
    </div>
@endsection