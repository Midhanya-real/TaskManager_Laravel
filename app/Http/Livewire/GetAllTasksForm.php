<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class GetAllTasksForm extends Component
{
    use AuthorizesRequests;

    public Collection $tasks;

    public function mount($tasks)
    {
        $this->tasks = $tasks;
    }

    public function show(Task $task)
    {
        return redirect()->route('tasks.show', ['task' => $task]);
    }

    public function update(Task $task)
    {
        return redirect()->route('tasks.edit', ['task' => $task]);
    }

    public function create()
    {
        return redirect()->route('tasks.create');
    }

    public function delete(Task $task)
    {
        $this->authorize('delete', $task);

        $task->delete();

        return redirect()->to('/tasks');
    }

    public function render()
    {
        return view('livewire.get-all-tasks-form');
    }
}
