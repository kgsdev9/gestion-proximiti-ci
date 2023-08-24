<?php

namespace App\Http\Livewire\Commande;

use Livewire\Component;
use App\Models\Commande;
use App\Models\TCommandeArticle;

class CommandeController extends Component
{
    public $codeCommande ;
    public $designation ;
    public $email ;
    public $prix ;
    public $quantite;
    public $telephone;
    public $addresfournisseur;
    public $nomfournisseur;
    public $description;
    public $status ;
    public $total;
    public $commande_id ;

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
         $order =Commande::create([
        'codeCommande' => $this->codeCommande ?? "REF-".time(),
        'telephone' => $this->telephone,
        'status' => $this->status ?? 'programme',
        'email' => 'email',
        'description' => $this->description,
        'nomfournisseur' => $this->nomfournisseur,
        'addresfournisseur' => $this->addresfournisseur,
        ]);

        foreach ($this->designation as $key => $value) {
            TCommandeArticle::create(['designation' => $this->designation[$key], 'prix' => $this->prix[$key] , 'quantite' => $this->quantite[$key], 'total' => (int)$this->prix[$key] * (int)$this->quantite[$key], 'commande_id'=> $order->id]);
        }

        $this->inputs = [];

        $this->reset();

        // $this->resetInputFields();

        session()->flash('message', 'Commande créé avec succes.');
    }


    public function render()
    {
        return view('livewire.commande.commande-controller', [
        'commandeRessource'=> Commande::orderByDesc('created_at')->paginate(10)
        ])->extends('admin.layouts.app')->section('master');
    }


    // public function edit($id) {
    //     $this->updateMode = true;
    //     $user = Commande::where('id',$id)->first();
    //     $this->user_id = $id;
    //     $this->designation = $user->designation;
    //     $this->prix = $user->prix;
    //     $this->quantite = $user->quantite;
    //     $this->telephone = $user->telephone;
    //     $this->status = $user->status;
    //     $this->email = $user->email;
    //     $this->description = $user->description;
    //     $this->nomfournisseur = $user->nomfournisseur;
    //     $this->addresfournisseur = $user->addresfournisseur;
    // }


    // public function show($id) {
    //     $user = Commande::where('id',$id)->first();
    //     $this->user_id = $id;
    //     $this->designation = $user->designation;
    //     $this->prix = $user->prix;
    //     $this->quantite = $user->quantite;
    //     $this->telephone = $user->telephone;
    //     $this->status = $user->status;
    //     $this->email = $user->email;
    //     $this->description = $user->description;
    //     $this->nomfournisseur = $user->nomfournisseur;
    //     $this->addresfournisseur = $user->addresfournisseur;
    // }


    public function update()
    {
        if ($this->user_id) {
            $user = Commande::find($this->user_id);
            $user->update([
                'designation' => $this->designation,
                'prix' => $this->prix,
                'quantite' => $this->quantite,
                'telephone' => $this->telephone,
                'status' => $this->status,
                'email' => $this->email,
                'description' => $this->description,
                'nomfournisseur' => $this->nomfournisseur,
                'addresfournisseur' => $this->addresfournisseur,
                'total' => $this->calculateAmount(),
            ]);

            $this->reset();
            // return redirect()->route('gestion.commande', ['succes'=> true]);
        }
    }



    public function delete($id)
    {
        if($id){
           Commande::where('id',$id)->delete();
            session()->flash('message', 'Commande supprimée avec success.');
        }
    }

}
