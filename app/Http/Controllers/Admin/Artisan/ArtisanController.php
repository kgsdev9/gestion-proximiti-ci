<?php

namespace App\Http\Controllers\Admin\Artisan;

use App\Models\Media;
use App\Models\Artisan;
use App\Models\Speciality;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ArtisanRequest;

class ArtisanController extends Controller
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
        $artisans = Artisan::orderByDesc('created_at')->get();
        $specialites = Speciality::orderBYDesc('libelle')->get();
        return view('admin.artisans.liste', compact('artisans', 'specialites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialites = Speciality::orderBYDesc('libelle')->get();
        return view('admin.artisans.create', compact('specialites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArtisanRequest $request)
    {

        if($request->hasfile('photo')) {
            $filetwo = $request->file('photo');
            $filenametwo  = $request->file('photo')->getClientOriginalName() ;
            $filetwo->move(public_path('artisans/photo'), $filenametwo);

            }


      $artisan  =   Artisan::create([
            'name' => $request->input('name'),
            'slug' => \Str::limit($request->input('name')),
            'prenom' => $request->input('prenom'),
            'telephone' => $request->input('telephone'),
            'status' => $request->input('status'),
            'num_whattsapp' => $request->input('num_whattsap'),
            'adresse' => $request->input('adresse'),
            'speciality_id' => $request->input('speciality_id'),
            'photo'=>$filenametwo,
            'email' => $request->input('email'),
            'description' => $request->input('description'),
            'commune' => $request->input('commune'),
            'date_adhesion' => $request->input('date_adhesion'),
            'zone_intervention' => $request->input('zone_intervention'),

        ]);

        if( $request->hasfile('file')) {
            $file = $request->file('file');
            // $filename = time().'.'.$extention;
            foreach($file as $informations) {
                $filename = time().'_'.$informations->getClientOriginalName();
                $informations->move(\public_path("programme"), $filename);
                Media::create([
                'artisan_id' => $artisan->id,
                'image' => $filename
                 ]);
            }
        }

        Flashy::message('Artisan ajouté avec succes!');
        return redirect()->route('artisan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ressource = Artisan::find($id);
        $fileRessource = Media::where('artisan_id', $ressource->id)->first();
        return view('admin.artisans.detail', compact('ressource', 'fileRessource'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $ressource = Artisan::find($id);
        $specialites = Speciality::all();

        return view('admin.artisans.edit', compact('ressource', 'specialites'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArtisanRequest $request, $id)
    {
        $ressource  = Artisan::find($id);


        $ressource->name = $request->input('name');
        $ressource->slug = \Str::slug($request->input('name'));
        $ressource->telephone = $request->input('telephone');
        $ressource->num_whattsapp = $request->input('num_whattsap');
        $ressource->adresse = $request->input('adresse');
        $ressource->email = $request->input('email');
        $ressource->status = $request->input('statut');
        $ressource->commune = $request->input('commune');
        $ressource->date_adhesion = $request->input('date_adhesion');
        $ressource->zone_intervention = $request->input('zone_intervention');
        $ressource->speciality_id = $request->input('speciality_id');
        $ressource->description = $request->input('description');

        if($request->hasFile('photo')) {
            $chemin = 'artisans/photo/'.$ressource->cover_image;
            if(File::exists($chemin)) {
            $docs =    File::delete($chemin) ;
            }
            $file = $request->file('photo');
            $name = $request->file('photo')->getClientOriginalName();
            $file->move(public_path('artisans/photo/'),$name);
            $ressource->photo = $name;
         }

        $ressource->update();

        if($request->hasFile('file')) {
            $files = $request->file('file');
            foreach ($files as $file) {
            $image = time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("programme"), $image);
            Media::create([
                'artisan_id' => $ressource->id,
                'image' => $image
                 ]);
            }
        }

        Flashy::message('Fiche artisan modifiée avec succes!');
        // return redirect()->route('artisan.index');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ressource = Artisan::find($id);
        $path = 'artisans/photo/'.$ressource->photo;

        DB::table('media')->where('artisan_id', '=', $ressource->id)->delete();

        if(File::exists($path)) {
        $docs =  File::delete($path) ;
        }

        $ressource->delete();
        return redirect()->route('artisan.index');
    }
}
