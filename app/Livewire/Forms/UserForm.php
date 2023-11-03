<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Rule;

class UserForm extends Form
{
    #[Locked]
    public ?int $id = null;

    #[Rule(['required', 'max:255', 'min:2', 'string'])]
    public string $name;

    #[Rule(['required', 'email', 'max:255', 'min:2', 'string'])]
    public string $email;

    #[Rule(['required', 'max:255', 'min:2', 'string', 'confirmed'])]
    public string $password;

    public string $password_confirmation;

    public function save()
    {
        $this->validate();

        User::updateOrCreate(['id' => $this->id], [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);
    }
}
