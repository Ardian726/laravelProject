<?php

namespace App\Http\Livewire\Pages;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginComponent extends Component
{
    public $email;
    public $password;
    protected $rules = [
        'password' => 'required',
        'email' => 'required|email',
    ];
    public function handleLogin()
    {
        $this->validate();

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];
        if (Auth::attempt($credentials)) {
            session()->flash('message', 'Successfully login with your account!');
            return redirect(route("dashboard"));
        } else {
            session()->flash('error', 'Something wrong credentials!');
            return redirect(back());
        }
    }
    public function render()
    {
        return view('livewire.pages.login-component')->layout("template.auth");
    }
}
