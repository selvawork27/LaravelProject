<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $tasks=\App\Models\tasks::all();
       return view('index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'nullable|date',
            'is_completed' => 'boolean',
        ]);
        $task = \App\Models\tasks::create($validatedData);
        $tasks=\App\Models\tasks::all();
        return view('index',compact('tasks'));
    }
    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        $task=\App\Models\tasks::findOrFail($id);
        $task->delete();
        return redirect()->route('tasks');
    }
}
