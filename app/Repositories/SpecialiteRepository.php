<?php

namespace App\Repositories;

use App\Models\Speciality;

class SpecialiteRepository {

    protected $specialite ;

    public function __construct(Speciality $specialite)
    {
        $this->specialite = $specialite;
    }

    public function all() {
        return $this->specialite ->all();
    }


    public function collectionFilters() {
        return $this->specialite
                    ->orderByDesc('created_at')
                    ->get();
    }


    public function single($id) {
        return $this->specialite->find($id);
    }


}
