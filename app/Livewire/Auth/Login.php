<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $remember = false;
    public $errorMessage;
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|string',
    ];
    public function login()
    {
        $this->validate();
        if(Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)){
            session()->regenerate();
            return redirect()->intended('/kelas');
        }

        $this->addError('email', 'Email atau password salah');
    }
    public function render()
    {
        if(Auth::check()) {
            return redirect('/kelas');
        }
        return view('livewire.auth.login');
    }
}
