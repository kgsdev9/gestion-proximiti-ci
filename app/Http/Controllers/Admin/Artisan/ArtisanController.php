<?php

namespace App\Http\Controllers\Admin\Artisan;


use MercurySeries\Flashy\Flashy;
use App\Services\SpecialiteService;
use App\Services\ArtisanService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ArtisanRequest;

class ArtisanController extends Controller
{
    protected $specialiteService ;
    protected $artisanService ;

    public function __construct(SpecialiteService $specialiteService, ArtisanService $artisanService)
    {
        $this->middleware('auth');
        $this->specialiteService = $specialiteService ;
        $this->artisanService = $artisanService ;
    }

    /**
     * Affichage des entités  ressources.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        return view('admin.artisans.liste', [
            'allArtisans' => $this->artisanService->all(),
            'allSpecialites'=> $this->specialiteService->all()
        ]);
    }

    /**
     * Affichage du formulaire pour affichage de la ressource .
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('admin.artisans.create', [
            'allSpecialites' => $this->specialiteService->all()
        ]);
    }

    /**
     * Enregistrement de la ressource dans la base de données.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(ArtisanRequest $request) {
        $this->artisanService->save($request);
        Flashy::message('Artisan ajouté avec succes!');
        return redirect()->back();
    }

    /**
     * Affichage d'une seule ressource spécifique.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.artisans.detail', [
            'singleRessourceArtisan' =>  $this->artisanService->single($id),
            'allMediaArtisan'=>  $this->artisanService->getMediaArtisan($id)
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
        return view('admin.artisans.edit', [
            'allSpecialites'=> $this->specialiteService->all(),
            'singleRessource'=> $this->artisanService->single($id)
        ]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function update(ArtisanRequest $request, $id) {
         $this->artisanService->update($request, $id);
         Flashy::message('Action effécutée avec succes!');
         return redirect()->back();
     }

     public function getPathPhoto(string $photo, Object $files) {
        $collectionRessource = [];
        if($photo) {
            File::exists("artisans/photo". $photo);
            File::delete("artisans/photo". $photo);

        }
        if($files) {
            $value = 0;
            foreach($files as $file) {
                if(File::exists("programme". $file->image)) {
                    File::delete("programme". $file->image);
                    $value+=1 ;
                }
            }
        }

      return   $collectionRessource =  [];
    }






    /**
     * Suppression de la ressource spéficique dans le storage et dans la base de données .
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->artisanService->single($id)->delete();
        Flashy::message('action effécuté avec succes!');
        return redirect()->back();

    }
}
