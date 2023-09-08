<?php

namespace App\Http\Controllers\Api\Mission;

use App\Http\Controllers\Controller;
use App\Services\ArtisanService;
use App\Services\MissionService;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Mission;
use App\Models\Speciality;

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
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index() {
        return view('missions.liste', [
        'allMissions' => $this->missionService->collectionFilters()
        ]);
    }


    public function create() {
        return view('missions.create', [
            'allArtisans' =>  $this->artisanService->all(),
            'AllSuplliers' => Client::all(),
            'specialites'=> Speciality::all()
        ]);
    }

    public function store(Request $request) {
      $ressource=   Mission::create([
            'libelle'=> $request->input('text'),
            'date_debut'=> $request->input('date_debut'),
            'date_fin'=> $request->input('date_fin'),
            'artisan_id'=> $request->input('artisan_id'),
            'client_id'=> $request->input('client_id'),
            'status'=> $request->input('status'),
            'type'=> $request->input('type'),
            'description'=> $request->input('description'),
        ]);
            $ressource->specialites()->sync($request->specialite_id);
            $ressource->save;
            return redirect()->route('missions.index', ['succes' => true]);
    }


    public function show(string $id) {
        $ressource = Mission::find($id);
        return view('missions.detail', compact('ressource'));
    }


}
