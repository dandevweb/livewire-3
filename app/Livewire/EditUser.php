<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Livewire\Forms\UserForm;

class EditUser extends Component
{
    public User $user;
    public UserForm $form;

    public function mount()
    {
        $this->form->name = $this->user->name;
        $this->form->email = $this->user->email;
        $this->form->id = $this->user->id;
    }

    public function render()
    {
        return view('livewire.edit-user');
    }

    public function submit()
    {
        $this->form->save();
    }
}
