@extends('layouts.app')

@section('content')

    <form action="{{url("/todos/$todo->id")}}" method="POST">
        @csrf
        @method('PATCH')

        <label for="name">Edit your todo here</label> <br/>
        <input type="text" name="name">

        <button type="submit">Edit</button>
    </form>

@endsection