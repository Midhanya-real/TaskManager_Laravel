<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class CreateForm extends Component
{
    public Task $task;
    public $user_id;

    protected $rules = [
        'task.head' => 'required',
        'task.about' => 'required',
        'task.status' => 'required',
        'task.end_time' => 'required',
        'task.user_id' => 'exists:App\Models\User,id'
    ];

    public function mount(Task $task, $user_id)
    {
        $this->task = $task;
        $this->user_id = $user_id;
    }

    public function isEmpty($user_id)
    {
        return empty($user_id);
    }

    public function create()
    {
        if($this->isEmpty($this->task->user_id))
        {
            $this->task->user_id = $this->user_id;
        }

        $this->validate();

        $this->task->save();

        return redirect()->route('tasks.index');
    }

    public function render()
    {
        return view('livewire.create-form');
    }
}
