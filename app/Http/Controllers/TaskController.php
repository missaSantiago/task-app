<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('id', 'ASC')->paginate(5);

        return view('tasks', compact('tasks'));
    }

    public function show(Int $id)
    {
        $task = Task::findOrFail($id);

        return view('task-show', compact('task'));
    }
}
