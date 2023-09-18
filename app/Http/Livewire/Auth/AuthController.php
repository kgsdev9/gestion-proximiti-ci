<?php

namespace App\Http\Livewire\Auth;


use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AuthController extends Component
{

    public $email  ;
    public $password ;



    public function render()
    {
        return view('livewire.auth.auth-controller')->extends('livewire.layout')->section('auth');
    }


    public function save() {
         $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if(Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
                 return redirect()->route('home');
        }else{
            session()->flash('error', 'l\'adreese email ou le mot de passe incorrecte.');
        }
    }


    public function logout() {
        Auth::logout();
        return redirect()->route('auth.login');
    }




}
