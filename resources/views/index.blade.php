@extends('layout')

@section('meta')
@endsection

@section('content')
    <h1>To-Do</h1>
    <ul>
        @foreach($tasks as $task)
            <li>
                <div class="row">
                    <div class="col-sm">
                        <form action="/task/update/{{ $task->id }}" method="POST">
                            @csrf
                            <input type="checkbox" name="completed" id="completed"
                            @if($task->completed)
                            checked
                            @endif
                            onchange="submit()">
                            <input type="text" name="description" id="description" value="{{ $task->description }}" onchange="submit()">
                        </form>
                    </div>
                    <div class="col-sm">
                        <form action="/task/delete/{{ $task->id }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </li>
        @endforeach
        <li>
            <form action="/task/new" method="POST">
                @csrf
                <button class="btn btn-primary" type="submit">+ New Task</button>
            </form>
        </li>
    </ul>
@endsection