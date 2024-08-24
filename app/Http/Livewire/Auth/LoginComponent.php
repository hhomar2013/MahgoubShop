<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginComponent extends Component
{
    public $email;
    public $password;
    public $remember;

    // protected $rules = [
    //     'email'=> 'required|email',
    //     'password' =>'required'
    // ];

    public function login(){
        $credentials = $this->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ]
        );
        // $credentials = [
        //     'email' => $this->email,
        //     'password' => $this->password
        // ];


        if(Auth::attempt($credentials, $this->remember))
        {
            session()->flash('message', 'You have successfully logged in!');
            return redirect()->route('home');
        }

        $this->addError('email',__('These credentials do not match our records.'));



    }

    public function render()
    {
        return view('livewire.auth.login-component')->layout('layouts.base',['title'=> __('Log In')]);
    }
}
