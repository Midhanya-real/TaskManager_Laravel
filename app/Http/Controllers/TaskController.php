<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Repository\TasksRepository;
use Illuminate\Http\Response;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
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
     * @return Application|ResponseFactory|Response|View
     */
    public function show(Request $request, Task $task): Application|ResponseFactory|Response|view
    {
        return $request->user()->can('view', $task)
            ? view('tasks.show-task', ['task' => $task])
            : abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param Task $task
     * @return Application|ResponseFactory|Response|View
     */
    public function edit(Request $request, Task $task): Application|ResponseFactory|Response|view
    {
        return $request->user()->can('update', $task)
            ? view('tasks.edit', ['task' => $task])
            : abort(404);
    }
}
