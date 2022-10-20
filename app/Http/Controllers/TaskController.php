<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Repository\TasksRepository;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TaskController extends Controller
{
    private TasksRepository $repository;

    public function __construct(TasksRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View
     */

    public function index(Request $request): view
    {
        $tasks = $this->repository->index($request);

        return view('tasks.tasks', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(Request $request): view
    {
        return view('tasks.create', ['user_id' => $request->user()->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param Task $task
     * @return View
     */
    public function show(Request $request, Task $task): view
    {
        $task = $this->repository->showTask($request, $task);

        return view('tasks.show-task', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Task $task
     * @return View
     */
    public function edit(Task $task): view
    {
        return view('tasks.edit', ['task' => $task]);
    }
}
