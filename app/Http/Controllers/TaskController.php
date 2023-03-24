<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::latest()->get();
        return view('tasks', compact('tasks'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'task' => 'required|string|max:90'
        ]);

        Task::create([
            'task' => $validated['task']
        ]);

        return to_route('home');

    }

    public function edit(Task $task)
    {
        return view('task_edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'task' => 'required|string|max:90'
        ]);

        Task::where('id', $task->id)
        ->update(['task' => $validated['task']]);
        return to_route('home');



    }

    public function destroy(Task $task)
    {
        $task->delete();
        return to_route('home');
    }

}
