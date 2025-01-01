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
                        <form method="POST" action="/tasks/{{ $task->id }}">
                            @method('PATCH')
                            @csrf
                            @if ($task->checkIfCompleted())
                                <span class="btn btn-success" style="cursor: default; width: 110px">Completed</span>
                            @else
                                <button class="btn btn-secondary" input="submit" style="width: 110px">Complete</button>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="d-flex gap-3">
            <a href="/tasks/create" class="btn btn-primary" style="width: 70%">New Task</a>
            <div class="d-flex justify-content-center">
                {{ $tasks->links() }}
            </div>
        </div>
    </div>
@endsection
