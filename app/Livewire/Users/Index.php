<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $appName;

    public function __construct()
    {
        $this->appName = env('APP_NAME');
    }

    public function render()
    {
        $users = User::latest()->paginate(10);

        return view('livewire.users.index', [
            'users' => $users
        ])->title('Users - ' . $this->appName);
    }
}
