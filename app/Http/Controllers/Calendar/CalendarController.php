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
        // dd($appointments);

        foreach ($appointments as $appointment) {
            $events[] = [
                'title' => $appointment->libelle,
                'start' => $appointment->date_debut,
                'end' => $appointment->date_fin,
            ];
        }

        return view('livewire.home', compact('events'));
    }




    //  public function calendrier() {
    //     $agenda =  json_encode(Mission::all());

    //     return view('livewire.home', [
    //         'events' => $agenda
    //     ]);
    // }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
