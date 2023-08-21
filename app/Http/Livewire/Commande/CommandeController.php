<?php

namespace App\Http\Livewire\Commande;

use Livewire\Component;
use App\Models\Commande;

class CommandeController extends Component
{
    public $codeCommande ;
    public $user_id;
    public $designation;
    public $prix ;
    public $quantite;
    public $telephone;
    public $email;
    public $addresfournisseur;
    public $nomfournisseur;
    public $description;
    public $status ;
    public $updateMode = false;

    protected $rules = [
        'designation' => 'required',
        'prix' => 'required|integer',
        'quantite' => 'required|integer',
        'codeCommande'  =>'required'
    ];




    public function mount() {
        $this->codeCommande = "PROXIMITI". rand(1000, 2000);
    }
    public function calculateAmount() {
        $multiplace =  $this->prix * $this->quantite ;
        return $multiplace ;
     }


     public function cancel()
     {
         $this->updateMode = false;
         $this->reset();
     }



     public function save() {
        $this->validate();
        Commande::create([
        'codeCommande' => $this->codeCommande ?? "REF-".time(),
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

        $this->emit('userStore'); //

     }




    public function render()
    {
        return view('livewire.commande.commande-controller', [
        'commandeRessource'=> Commande::orderByDesc('created_at')->paginate(10)
        ])->extends('admin.layouts.app')->section('master');
    }


    public function edit($id) {
        $this->updateMode = true;
        $user = Commande::where('id',$id)->first();
        $this->user_id = $id;
        $this->designation = $user->designation;
        $this->prix = $user->prix;
        $this->quantite = $user->quantite;
        $this->telephone = $user->telephone;
        $this->status = $user->status;
        $this->email = $user->email;
        $this->description = $user->description;
        $this->nomfournisseur = $user->nomfournisseur;
        $this->addresfournisseur = $user->addresfournisseur;
    }


    public function show($id) {
        $user = Commande::where('id',$id)->first();
        $this->user_id = $id;
        $this->designation = $user->designation;
        $this->prix = $user->prix;
        $this->quantite = $user->quantite;
        $this->telephone = $user->telephone;
        $this->status = $user->status;
        $this->email = $user->email;
        $this->description = $user->description;
        $this->nomfournisseur = $user->nomfournisseur;
        $this->addresfournisseur = $user->addresfournisseur;
    }


    public function update()
    {
        // $validatedDate = $this->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        // ]);
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

            // $this->updateMode = false;
            // session()->flash('message', 'Users Updated Successfully.');
            // $this->resetInputFields();
            $this->updateMode = false;

            $this->reset();
            // return redirect()->route('gestion.commande', ['succes'=> true]);
        }
    }



    public function delete($id)
    {
        if($id){
           Commande::where('id',$id)->delete();
            session()->flash('message', 'Users Deleted Successfully.');
        }
    }

}
