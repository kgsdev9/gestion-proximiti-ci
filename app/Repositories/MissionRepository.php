<?php
namespace App\Repositories;

use App\Models\Mission;

class MissionRepository {


    protected $mission ;


    public function __construct(mission $mission)
    {
        $this->mission = $mission;
    }


    public function collectionFilters() {
        return $this->mission
                    ->orderByDesc('created_at')
                    ->get();
    }


    public function single($id) {
        return $this->mission->find($id);
    }

    public function singleAssigmentArtisan(int $id) {
        return $this->mission->where('artisan_id', $id)
                             ->orderByDesc('created_at')
                             ->paginate(10);
    }

}
