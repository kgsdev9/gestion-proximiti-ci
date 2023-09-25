<?php

namespace App\Http\Livewire\Notifcation;

use App\Models\Artisan;
use App\Models\Message;
use App\Models\Speciality;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Twilio\Rest\Client;

class PhoneNumberNotification extends Component
{

    public $message =  [] ;

    public $sms ="Proximiti Vous avez une nouvelle mission. Appelez le 0500507952 et indiquez le code PX2509. A bientôt ! L'équipe Proximiti";

    public $filter ;

    protected $rules = [
        'sms' => 'required',

    ];

    public function render()
    {
        return view('livewire.notifcation.phone-number-notification', [
            'allArtisans' => Artisan::all(),
            'selectionArtisan'=>  Artisan::find($this->message),
            'allSpecialites' => Speciality::all(),
            'allMessages' => Message::orderByDesc('created_at')->get()
        ])
        ->extends('admin.layouts.app')->section('master');
    }

    public function send()  {
        $this->validate();
      $count  = 0;
      $ressource  =  Artisan::find($this->message);
      foreach($ressource as $value) {
        $count++;
            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_AUTH_TOKEN");
            $twilio_number = getenv("TWILIO_NUMBER");
            $twilio_name = getenv('TWILIO_RECIPIENT_NAME');
            $client = new Client($account_sid, $auth_token);
            $client->messages->create($value->telephone, [
                'from' => $twilio_number,
                'to'=> $twilio_name,
                'body' => $this->sms]);

                $rs=Message::create([
                    'message'=> $this->sms,
                    'total_envoi' => $count,
                    'user_id' => Auth::user()->id
                ]);
                $rs->artisans()->sync($value->id);
        }

        $this->reset();
      }



    }








// return back()->with( 'success', $count . "Message énvoyé avec succes!" );
