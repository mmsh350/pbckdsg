<?php

namespace App\Livewire\Admin\Settings;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class Index extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';

    public function saveUser()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->reset(['name', 'email', 'password', 'password_confirmation']);
        
        session()->flash('success', 'User successfully added.');
    }

    public function deleteUser($id)
    {
        if (auth()->id() == $id) {
            session()->flash('error', 'You cannot delete your own account.');
            return;
        }
        
        User::findOrFail($id)->delete();
        session()->flash('success', 'User successfully deleted.');
    }

    public function render()
    {
        $users = User::orderBy('name')->get();
        return view('livewire.admin.settings.index', compact('users'))->layout('layouts.app');
    }
}
