<?php

namespace App\Services;


use App\Repositories\EquipmentRepository;

class EquipmentService
{
    protected $equipmentRepository ;

     public function __construct(EquipmentRepository $equipmentRepository)
     {
        $this->equipmentRepository = $equipmentRepository;
     }

     public function all() {
        return $this->equipmentRepository->all();
     }



}
