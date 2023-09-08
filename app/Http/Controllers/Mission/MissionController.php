<?php

namespace App\Http\Controllers\Mission;

use App\Http\Controllers\Controller;
use App\Services\ArtisanService;
use App\Models\Client;
use App\Services\MissionService;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    protected $missionService ;
    protected $artisanService;

    public function __construct(MissionService $missionService, ArtisanService $artisanService )
    {
        $this->missionService = $missionService;
        $this->artisanService = $artisanService;
        $this->middleware('auth');

    }

    /**
     * Affichage de toutes les missions.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('livewire.commande.missionssendGmail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('missions.create', [
            'allArtisan' =>  $this->artisanService->all(),
            'AllSuplliers' => Client::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
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
