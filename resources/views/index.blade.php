@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <th>Task List</th>
            </div>
            @foreach ($tasks as $task)
                <div class="card-body">
                    <tbody>{{ $task->description }}</tbody>
                </div>
            @endforeach
        </div>
    </div>
@endsection
