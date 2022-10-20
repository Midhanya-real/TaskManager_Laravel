<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WelcomeInfoForm extends Component
{
    public function logIn()
    {
        return redirect()->route('login');
    }

    public function registerUser()
    {
        return redirect()->route('register');
    }

    public function getTasks()
    {
        return redirect()->route('tasks.index');
    }
    public function render()
    {
        return view('livewire.welcome-info-form');
    }
}
