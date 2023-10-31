<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class UserForm extends Component
{

    #[Rule(['required', 'max:255', 'min:2', 'string'])]
    public string $name;

    #[Rule(['required', 'email', 'max:255', 'min:2', 'string'])]
    public string $email;

    #[Rule(['required', 'max:255', 'min:2', 'string', 'confirmed'])]
    public string $password;

    public string $password_confirmation;

    // public function rules(): array
    // {
    //     return [
    //         'name' => ['required', 'max:255', 'min:2', 'string'],
    //         'email' => ['required', 'email', 'max:255', 'min:2', 'string'],
    //         'password' => ['required', 'max:255', 'min:2', 'string', 'confirmed'],
    //     ];
    // }

    public function render()
    {
        return view('livewire.user-form');
    }

    public function submit()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);
    }
}