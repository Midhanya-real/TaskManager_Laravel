<?php

namespace App\Repository;

use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class TasksRepository
{
    /**
     * @param Request $request
     * @return Collection
     */

    public function index(Request $request): Collection
    {
        return $request->user()->can('viewAny', Task::class)
            ? Task::all()
            : Task::whereBelongsTo($request->user())->get();
    }
}
