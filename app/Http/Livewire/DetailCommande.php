<?php

namespace App\Http\Livewire;

use App\Models\Commande;
use App\Models\TCommandeArticle;
use Livewire\Component;

class DetailCommande extends Component
{

    public $commande;
    public $ressource ;

    public $phone ;

    public function mount($id)
    {
        $this->commande = Commande::find($id);
        $this->ressource=TCommandeArticle::where('commande_id', '=', $this->commande->id)->get();
    }

    public function render()
    {
        return view('livewire.detail-commande', [
            'data' => $this->ressource,
            'commande' =>$this->commande
        ])->extends('admin.layouts.app')->section('master');
    }


    public function show($id) {
        $this->commande = Commande::find($id);
        $ressource =   TCommandeArticle::where('commande_id', '=', $this->commande->id)->get();

        $this->phone = $this->commande->telephone;



    }



}
