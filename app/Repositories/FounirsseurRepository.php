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




}
