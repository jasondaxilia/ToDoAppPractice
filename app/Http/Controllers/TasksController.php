<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        // return dd($tasks);
        return view('index', compact('tasks'));
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $task = Task::create([
            'description' => request('description'),
        ]);

        return dd($task);
    }
}
