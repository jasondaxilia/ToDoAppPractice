<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('completed_at')
            ->orderByDesc('id')
            ->paginate(8);

        // return dd($tasks);
        return view('index', compact('tasks'));
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        request()->validate([
            'description' => 'required',
        ]);

        Task::create([
            'description' => request('description'),
        ]);

        // return dd($task);
        return redirect('/');
    }

    public function update($id)
    {
        $task = Task::where('id', $id)->first();

        $task->completed_at = now();
        $task->save();
        return redirect('/');
    }

    public function delete($id)
    {
        $task = Task::where('id', $id)->first();
        $task->delete();
        return redirect('/');
    }
}
