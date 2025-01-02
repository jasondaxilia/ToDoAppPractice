@extends('layout')

@section('content')
    <div class="container bt">
        <div class="h2">Deleted Tasks</div>
        @foreach ($tasks as $task)
            @if ($task->deleted_at)
                <div class="card mb-2">
                    <div class="card-body d-flex">
                        <div class="align-content-center" style="width: 90%;font-size: 20px">
                            {{ $task->description }}
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        <div class="d-flex mb-2">
            <a href="/tasks/create" class="btn btn-primary w-100">New Task</a>
        </div>
        {{ $tasks->links() }}
    </div>
@endsection
