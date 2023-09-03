<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CodeAuthoriseToken;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PortailAutrise extends Component
{

    public $code ;

    public function render()
    {
        return view('livewire.portail-autrise')->extends('livewire.layout')->section('auth');
    }

    public function connexion() {
    $code= CodeAuthoriseToken::where('code', $this->code)->first();
    if($code) {

        DB::table('users')
        ->where('id', Auth::user()->id)
        ->update(['status' => 1]);
       return redirect()->route('home', ['auth.login', true]);
    } else {
        return redirect()->back();
    }



    }
}

