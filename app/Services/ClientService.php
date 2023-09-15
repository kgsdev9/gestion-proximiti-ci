<?php

namespace App\Services;

use App\Repositories\ClientRepository;


class ClientService
{
    protected $clientRepository ;

     public function __construct(ClientRepository $clientRepository)
     {
        $this->clientRepository = $clientRepository;
     }


      public function  collectionFilters() {
        return $this->clientRepository->collectionFilters();
      }


      public function single(string $id) {
        return $this->clientRepository->single($id);
      }


}
