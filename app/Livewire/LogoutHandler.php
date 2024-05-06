<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutHandler extends Component
{
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return $this->redirect(route('login'), navigate:true);
    }

    public function render()
    {
        return view('livewire.logout-handler');
    }
}
