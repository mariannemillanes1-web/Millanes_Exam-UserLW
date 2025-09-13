<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;

class Table extends Component
{
    public $users;

    public function mount() {
        $this->users = User::limit(20)->get();
        // You can pass $users to the view if needed
    }
    public function render()
    {
        return view('livewire.users.table');
    }
}

