<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserDetail extends Component
{
    public User $user;

    public function rules()
    {
        return [
            'user.name' => 'required',
            'user.email' => 'required|email',
        ];
    }

    public function mount(): void
    {
        $this->user = auth()->user();
    }

    public function render()
    {
        return view('livewire.user-detail');
    }

    public function refresh()
    {
    }
}
