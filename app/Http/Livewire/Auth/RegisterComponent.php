<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RegisterComponent extends Component
{
    public $name,$email,$password,$realpassword;


    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }
    public function register()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $this->realpassword = $this->password;
        $this->password = Hash::make($this->password);

        User::create(['name' => $this->name, 'email' => $this->email,'password' => $this->password]);



        $credentials = [
            'email' => $this->email,
            'password' => $this->realpassword,
        ];
        if( Auth::attempt($credentials)){
            session()->flash('message', 'Your register successfully Go to the login page.');
            return redirect()->route('home');
        }
        // $this->resetInputFields();

        // return $this->redirectRoute('home');
    }

    public function render()
    {
        return view('livewire.auth.register-component')->layout('layouts.base',['title'=> __('Sign Up')]);
    }
}
