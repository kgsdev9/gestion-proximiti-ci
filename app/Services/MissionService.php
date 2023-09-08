<?php

namespace App\Services;

use App\Repositories\MissionRepository;


class MissionService
{
    protected $missionRepository ;

     public function __construct(MissionRepository $missionRepository)
     {
        $this->missionRepository = $missionRepository;
     }


      public function  collectionFilters() {
        return $this->missionRepository->collectionFilters();
      }


}
