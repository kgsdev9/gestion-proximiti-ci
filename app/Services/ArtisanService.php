<?php

namespace App\Services;
use App\Repositories\ArtisanRepository;


class ArtisanService
{
    protected $artisanRepositories ;

     public function __construct(ArtisanRepository $artisanRepositories)
     {
        $this->artisanRepositories = $artisanRepositories;
     }

     public function all() {
        return $this->artisanRepositories->all();
    }
}
