<?php

namespace App\Http\Livewire;

use App\Models\Mission;
use Asantibanez\LivewireCalendar\LivewireCalendar;


class AppointmentsCalendar extends LivewireCalendar
{


    public function onDayClick($year, $month, $day)
    {
        // This event is triggered when a day is clicked
        // You will be given the $year, $month and $day for that day
    }

    public function onEventClick($eventId)
{
    // This event is triggered when an event card is clicked
    // You will be given the event id that was clicked
}


public function onEventDropped($eventId, $year, $month, $day)
{
    // This event will fire when an event is dragged and dropped into another calendar day
    // You will get the event id, year, month and day where it was dragged to
}


}
