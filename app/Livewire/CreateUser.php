<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Livewire\Forms\UserForm;

class CreateUser extends Component
{
    public UserForm $form;

    public function render()
    {
        return view('livewire.create-user');
    }

    public function submit()
    {
        $this->form->save();
    }
}
