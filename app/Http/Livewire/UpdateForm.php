<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class UpdateForm extends Component
{
    use AuthorizesRequests;

    public Task $task;

    protected $rules = [
        'task.head' => 'required',
        'task.about' => 'required',
        'task.status' => 'required',
        'task.end_time' => 'required',
        'task.user_id' => 'required|exists:App\Models\User,id'
    ];

    public function mount(Task $task)
    {
        $this->task = $task;
    }

    public function update()
    {
        $this->authorize('update', $this->task);

        $this->validate();

        $this->task->save();

        return redirect()->route('tasks.index');
    }

    public function render()
    {
        return view('livewire.update-form');
    }
}
