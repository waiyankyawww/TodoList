@extends('layouts.app')

@section('content')
    <div class="container">
        <ol>
            <li> {{ $todo->name }} </li>
            <form action="{{url("/todos/$todo->id")}}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit">Delete</button>
            </form>
        </ol>
    </div>
@endsection