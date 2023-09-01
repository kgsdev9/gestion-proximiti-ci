<?php

namespace App\Repositories;

use App\Models\TFournisseur;

class FounirsseurRepository
{
    protected $fournisseur ;

     public function __construct(TFournisseur $fournisseur)
     {
        $this->fournisseur = $fournisseur;
     }

     public function all() {
        return $this->fournisseur->all();
     }

     public function single($id) {
        return $this->fournisseur->find($id);
     }


     public function create(array $data) {

       $ressource =  $this->fournisseur->create([
            'designation' => $data['designation'],
            'adresse' => $data['adresse'],
            'prix' => $data['prix'],
            'commune' => $data['commune'],
            'telephone' => $data['telephone'],
            'fixe'  => $data['fax'],
            'email' => $data['email']
        ]);
        return $ressource ;
     }


     public function update(array $data , $id) {

        $ressource = $this->single($id);
        if($ressource) {
            $ressource->designation = $data['designation'];
            $ressource->adresse = $data['adresse'];
            $ressource->prix  = $data['prix'];
            $ressource->commune  = $data['commune'];
            $ressource->telephone  = $data['telephone'];
            $ressource->fixe  = $data['fax'];
            $ressource->email  = $data['email'];
            $ressource->update() ;

        } else {
            dd('inconues');
        }

        return $ressource ;


     }


}
