<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserCreate extends Component
{
    public $name;

    public $email;

    public $password;

    public $password_confirmation;

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        User::create($validated);

        return redirect('dashboard');
    }

    public function render()
    {
        return view('livewire.user-create');
    }
}
