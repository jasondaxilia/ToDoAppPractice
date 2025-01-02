@extends('layout')

@section('content')
    <div class="container">
        <div class="h1">New Tasks</div>

        @if ($errors->any())
            <div class="alert alert-danger align-items-center">
                @foreach ($errors->all() as $error)
                    <ul class="m-0">{{ $error }}</ul>
                @endforeach

            </div>
        @endif

        <form method="POST" action="/tasks">
            @csrf
            <div class="form-group">
                <label for="description"></label>
                <input name="description" class="form-control"></input>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">
                    Create Task
                </button>
            </div>
        </form>
    </div>
@endsection
