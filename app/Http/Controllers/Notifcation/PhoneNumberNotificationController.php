<?php

namespace App\Http\Controllers\Notifcation;

use Twilio\Rest\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PhoneNumberNotification;

class PhoneNumberNotificationController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('messagerie.Sms.annuaire-messagerie', [
            'users' => PhoneNumberNotification::all()
        ]);
    }




    public function sendSms(Request $request)
    {

        $numbers_in_arrays = explode( ',' , $request->input( 'phone' ) );
        $message = $request->input( 'editordata' );
           $count = 0;

        foreach($numbers_in_arrays as $number )

        {
            $count++;
            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_AUTH_TOKEN");
            $twilio_number = getenv("TWILIO_NUMBER");

            $client = new Client($account_sid, $auth_token);
            $client->messages->create($number, [
                'from' => $twilio_number,
                'body' => $message]);

        }

        return back()->with( 'success', $count . " messages sent!" );


    }



}
