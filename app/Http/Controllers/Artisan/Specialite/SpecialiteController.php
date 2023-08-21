<?php

namespace App\Http\Controllers\Artisan\Specialite;

use App\Models\Speciality;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use App\Http\Requests\SpecialiteRequest;

class SpecialiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialites = Speciality::all();
        return view('admin.specialite.liste', compact('specialites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.specialite.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SpecialiteRequest $request)
    {
        Speciality::create([
            'libelle' => $request->input('libelle'),
            'description' => $request->input('description')
        ]);
        Flashy::message('Spécialité ajoutée avec succes!');
        return redirect()->route('specialite.index');
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
        $ressource = Speciality::find($id);

        return view('admin.specialite.edit', compact('ressource'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SpecialiteRequest $request, $id)
    {
        $ressource = Speciality::find($id);
        $ressource->libelle = $request->input('libelle');
        $ressource->description =  $request->input('description');
        $ressource->update();
        Flashy::message('Specialité modifiée avec succes!');
        return redirect()->route('specialite.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ressource = Speciality::find($id);
        $ressource->delete();
        Flashy::error('Supprimé avec succes');
        return redirect()->back();
    }
}
