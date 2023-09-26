<?php

namespace App\Http\Livewire\Commande;

use App\Models\Client;
use App\Models\Artisan;
use Livewire\Component;
use App\Models\Commande;
use App\Models\TCommandeArticle;

class CommandeController extends Component
{
    public $codeCommande ;
    public $designation;
    public $prix ;
    public $quantite;
    public $date_expiration;
    public $total;
    public $inputs = [];
    public $i = 1;
    public $artisan_id;
    public $client_id;
    public $search ;


    public function show() {
        $data  = [] ;
        $ressource  =  Artisan::where('id', $this->artisan_id)->first();

        $data[] = ['nom' => $ressource->nom];

        return $data;
    }


    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

    public function calculatePrice() {
        $somme = $this->prix * $this->quantite ;
        return $somme ;
    }


    public function remove($i)
    {
        unset($this->inputs[$i]);
    }


    public function mount() {
        $this->codeCommande = "PROXIMITI". rand(1000, 2000);
    }

    public function store()
    {

    $validatedDate = $this->validate([
        'codeCommande'=>'required',
        'artisan_id' => 'required|exists:artisans,id',
        'client_id' => 'required|exists:clients,id',
        'prix'=>'required',
        'quantite'=>'required',
        'designation.0' => 'required',
        'prix.0' => 'required',
        'quantite.0' => 'required',
        'designation.*' => 'required',
        'prix.*' => 'required',
        'quantite.*' => 'required',
    ],
    [
        'designation.0.required' => 'ce champ est réquis',
        'prix.0.required' => 'ce champs est réquis',
        'quantite.0.required' => 'ce champs est réquis',
    ]
);
         $order =Commande::create([
        'codeCommande' => $this->codeCommande ?? "PROXI-".time(),
        'designation' => $this->designation,
        'artisan_id' => $this->artisan_id,
        'client_id' => $this->client_id,
        'expired_at' => $this->date_expiration,
        ]);

        foreach ($this->designation as $key => $value) {
            TCommandeArticle::create(['designation' => $this->designation[$key], 'prix' => $this->prix[$key] , 'quantite' => $this->quantite[$key], 'total' => (int)$this->prix[$key] * (int)$this->quantite[$key], 'commande_id'=> $order->id]);
        }

        $this->inputs = [];
        $this->reset();
        session()->flash('message', 'Commande créé avec succes.');
    }

    public function render()
    {
        return view('livewire.commande.commande-controller', [
        'allCommandes'=> Commande::where('codeCommande', 'like', '%'. $this->search. '%')->paginate(10),
        'ressourceArtisans' => Artisan::all(),
        'allClients' => Client::all()
        ])->extends('admin.layouts.app')->section('master');
    }



    public function delete($id)
    {
        if($id){
           Commande::where('id',$id)->delete();
            session()->flash('error', 'Commande supprimée avec success.');
        }
    }

}
