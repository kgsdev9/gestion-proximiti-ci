<?php
namespace App\Repositories;

use App\Models\Client;

class ClientRepository {


    protected $client ;


    public function __construct(Client $client)
    {
        $this->client = $client;
    }


    public function collectionFilters() {
        return $this->client
                    ->orderByDesc('created_at')
                    ->get();
    }


    public function single($id) {
        return $this->client->find($id);
    }

    

}
