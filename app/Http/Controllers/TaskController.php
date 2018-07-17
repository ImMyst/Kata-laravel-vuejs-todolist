<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Task[]|\Illuminate\Database\Eloquent\Collection
     */

    public function index()
    {
        return Task::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        return Task::Create(['title' => request('title')]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param TaskRequest $request
     * @return Task[]|\Illuminate\Database\Eloquent\Collection
     */
    public function edit(TaskRequest $request)
    {
        $task = Task::findOrFail($request->id);
        $task->title = $request->title;
        $task->save();

        return view('main')
            ->with('tasks', $task);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return void
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
    }
}
