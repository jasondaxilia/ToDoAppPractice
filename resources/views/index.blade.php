@extends('layout')

@section('content')
    <div class="container bt">
        <div class="h2">Tasks List</div>
        @foreach ($tasks as $task)
            <div class="card mb-2">
                <div class="card-body d-flex">
                    <div class="align-content-center" style="width: 90%;font-size: 20px">
                        {{ $task->description }}
                    </div>
                    <div class="text-center" style="width: 10%">
                        @if (!$task->checkIfCompleted())
                            <form method="POST" action="/tasks/{{ $task->id }}">
                                @method('PATCH')
                                @csrf
                                <button class="btn btn-success" type="submit" style="width: 110px">Complete</button>
                            </form>
                        @else
                            <form method="POST" action="/tasks/{{ $task->id }}">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit" style="width: 110px">Delete</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
        <div class="d-flex mb-2">
            <a href="/tasks/create" class="btn btn-primary w-100">New Task</a>
        </div>
        {{ $tasks->links() }}
    </div>
@endsection
