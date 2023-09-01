<?php

namespace App\Services;

use App\Repositories\FounirsseurRepository;

class FournisseurService
{
    protected $fournisseurRepository ;

     public function __construct(FounirsseurRepository $fournisseurRepository)
     {
        $this->fournisseurRepository = $fournisseurRepository;
     }

     public function all() {
        return $this->fournisseurRepository->all();
     }

     public function single($id) {
        return $this->fournisseurRepository->single($id);
     }

}
