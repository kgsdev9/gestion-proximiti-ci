<?php

namespace App\Services;

use App\Repositories\SpecialiteRepository;


class SpecialiteService

{
    protected $specialiteRepository ;

     public function __construct(SpecialiteRepository $specialiteRepository)
     {
        $this->specialiteRepository = $specialiteRepository;
     }


     public function all() {
        return $this->specialiteRepository->all();
     }


     public function collectionFilters() {
        return $this->specialiteRepository->collectionFilters();
     }

}
