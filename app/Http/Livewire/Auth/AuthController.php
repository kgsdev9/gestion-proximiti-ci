<?php

namespace App\Http\Livewire\Auth;

use Carbon\Carbon;
use App\Models\User;
use Livewire\Component;
use Twilio\Rest\Client;
use App\Models\CodeAuthoriseToken;
use Illuminate\Support\Facades\DB;
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


        if($ressource = Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
            // $phone = Auth::user()->phone;
            // $id = Auth::user()->id ;

            // $user = User::whereId($id)->first();

            // $ressource = CodeAuthoriseToken::create([
            //     'user_id' => $user->id,
            //     'code' => rand(123456, 999999),
            //     'expire_at' => Carbon::now()->addMinutes(10)
            // ]);

            // $message =  "Votre code D'authentification est". $ressource->code ;


                 return redirect()->route('home');
        }else{
            session()->flash('error', 'l\'adreese email ou le mot de passe incorrecte.');
        }
    }


    public function logout() {
        DB::table('users')
        ->where('id', Auth::user()->id)
        ->update(['status' => 0]);
        Auth::logout();

        return redirect()->route('auth.login');
    }



    public function generateOtp($phone)
    {
        $user = User::where('phone', $phone)->first();

        # User Does not Have Any Existing OTP
        $verificationCode = CodeAuthoriseToken::where('user_id', $user->id)->first();

        $now = Carbon::now();

        if($verificationCode && $now->isBefore($verificationCode->expire_at)){
            return $verificationCode;
        }

        // Create a New OTP

    }




}
