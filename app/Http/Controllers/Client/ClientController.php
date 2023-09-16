<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Services\ClientService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    protected $clientService ;

    public function __construct(ClientService $clientService)
    {
        $this->clientService = $clientService ;
    }


    /**
     * Affichage des listes des ressources.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clients.liste', [
            'allClients' => $this->clientService->collectionFilters()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        


        Client::create([
            'nom' => $request->input('nom'),
            'email' => $request->input('email'),
            'codeClient' => $request->input('code_client'),
            'prenom' => $request->input('nom'),
            'adresse' => $request->input('adresse'),
            'code_client' => $request->input('code_client'),
            'mode_contact' => $request->input('mode_contact'),
            'date_contact' => $request->input('date_contact'),
            'premimum' => $request->input('premimum') ?? 'non',
        ]);
        return redirect()->route('clients.store',  ['succes'=> true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('clients.edit', [
            'ressourceClient'=> $this->clientService->single($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('clients.edit', [
            'ressourceClient'=> $this->clientService->single($id)
        ]);
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
       $ressource=  Client::find($id);
       $ressource->nom = $request->input('nom');
       $ressource->prenom = $request->input('prenom');
       $ressource->email = $request->input('email');
       $ressource->codeClient = $request->input('code_client');
       $ressource->mode_contact	 = $request->input('mode_contact');
       $ressource->date_contact	 = $request->input('date_contact');
       $ressource->premimum	 = $request->input('premimum') ?? 'non';
       $ressource->update();
       return redirect()->route('clients.index', ['edited' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $ressource = $this->clientService->single($id);
      $ressource->delete();
      return redirect()->back();
    }
}
