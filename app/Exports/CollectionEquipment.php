<?php

namespace App\Exports;

use App\Models\Equipement;
use App\Services\EquipmentService;
use Maatwebsite\Excel\Concerns\FromCollection;

class CollectionEquipment implements FromCollection
{
    // protected $equipmentService ;

    // public function  __construct(EquipmentService $equipmentService)
    // {
    // $this->equipmentService = $equipmentService ;
    // }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Equipement::all();
    }
}
