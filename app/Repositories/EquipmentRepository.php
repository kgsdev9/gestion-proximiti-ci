<?php
namespace App\Repositories;

use App\Models\Equipement;

class EquipmentRepository {


    protected $equipment ;

    public function __construct(Equipement $equipment)
    {
        $this->equipment = $equipment;
    }

    public function all() {
        return $this->equipment->all();
    }

    public function collectionFilters() {
        return $this->equipment
                    ->orderByDesc('created_at')
                    ->get();
    }


    public function single($id) {
        return $this->equipment->find($id);
    }


}
