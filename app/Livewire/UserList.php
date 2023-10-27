<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use Illuminate\Pagination\LengthAwarePaginator;

class UserList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.user-list');
    }

    #[Computed]
    public function users(): LengthAwarePaginator
    {
        return User::query()
            ->select(['id', 'name', 'email'])
            ->paginate();
    }
}
