<?php

namespace App\Http\Controllers\Calendar;

use App\Models\Mission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalendarController extends Controller
{


    public function calendrier()
    {
        $events = [];

        $appointments =  Mission::orderBy('libelle')->get();

        foreach ($appointments as $appointment) {
            $events[] = [
                'title' => $appointment->libelle,
                'start' => $appointment->date_debut,
                'end' => $appointment->date_fin,
            ];
        }

        return view('livewire.home', compact('events'));
    }


    
}
