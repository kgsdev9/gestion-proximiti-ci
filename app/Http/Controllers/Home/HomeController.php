<?php

namespace App\Http\Controllers\Home;

use App\Models\User;
use App\Models\Media;
use App\Models\Artisan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Commande;
use App\Models\Speciality;
use App\Models\TCommandeArticle;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{


    public function detailCommande($id) {
        $ressource=  Commande::findOrFail($id);

        $data=TCommandeArticle::where('commande_id', '=', $ressource->id)->get();
        return view('detailcommande',compact('ressource', 'data'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {
        $this->middleware('auth');
    }


    public function index()
    {


        $candidats  = Artisan::count();
        $users = User::count();
        $specialite = Speciality::count();
        $artisans = Artisan::inRandomOrder()->take(8)->get();

        return view('welcome', compact('candidats', 'artisans', 'users', 'specialite'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

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

    public function deletefile($id) {
    $ressource = Media::findOrFail($id);


    if($path = File::exists("programme/".$ressource->image)) {
        File::delete('programme/'.$ressource->image);
    }

    $ressource->delete();
    return redirect()->back();
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
