<?php

namespace App\Http\Controllers\Fournisseur;

use App\Http\Controllers\Controller;
use App\Http\Requests\FournisseurRequest;
use App\Services\FournisseurService;


class FournisseurController extends Controller
{
    protected $fournisseurService ;


    public function __construct(FournisseurService $fournisseurService)
    {
        $this->fournisseurService = $fournisseurService ;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Fournisseurs.liste', [
            'ressourceFournisseur' => $this->fournisseurService->all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.Fournisseurs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FournisseurRequest $request)
    {

     $this->fournisseurService->create($request->all());
       return redirect()->route('fournisseurs.index', ['success' => true]);
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
     *  return view('categories/edit', [

     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.Fournisseurs.edit',  [
            'ressource' => $this->fournisseurService->single($id),
            'method' => 'POST',
            'action' => route('fournisseurs.update', $id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FournisseurRequest $request, $id)
    {
       $this->fournisseurService->update($request->all() ,$id);

       return redirect()->route('fournisseurs.index',['edited' => true]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $ressource=  $this->fournisseurService->single($id);
       if($ressource) {
        $ressource->destroy();
        return redirect()->back();
       }
    }
}
