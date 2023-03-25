<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::latest()->get();
        return view('tasks', compact('tasks'));
    }

    public function store(TaskRequest $request)
    {
        Task::create($request->validated());
        return to_route('home');
    }

    public function edit(Task $task)
    {
        return view('task_edit', compact('task'));
    }

    public function update(TaskRequest $request, Task $task)
    {
        $task->update($request->validated());
        return to_route('home');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return to_route('home');
    }

}
