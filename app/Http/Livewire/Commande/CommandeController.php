<?php

namespace App\Http\Livewire\Commande;

use Livewire\Component;
use App\Models\Commande;
use App\Models\TCommandeArticle;

class CommandeController extends Component
{
    public $codeCommande ;
    public $designation;
    public $fullname;
    public $prix ;
    public $quantite;
    public $date_expiration;
    public $telephone_client;
    public $adresse_intervention;
    public $total;
    public $inputs = [];
    public $i = 1;


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
        // 'designation.*.required' => 'designation est réquis',
        // 'prix.*.required' => 'le prix est requis',
        // 'quantite.*.required' => 'la quantite est réquis',

    ]
);




         $order =Commande::create([
        'codeCommande' => $this->codeCommande ?? "REF-".time(),
        'designation' => $this->designation,
        'fullname' => $this->fullname,
        'telephone_client' => $this->telephone_client,
        'adresse_intervention' => $this->adresse_intervention,
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
        'commandeRessource'=> Commande::orderByDesc('created_at')->paginate(10)
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
