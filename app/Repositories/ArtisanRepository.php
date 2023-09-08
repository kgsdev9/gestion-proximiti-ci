<?php


namespace App\Repositories;

use App\Models\Artisan;

class ArtisanRepository {

    protected $artisan ;

    public function __construct(Artisan $artisan)
    {
        $this->artisan = $artisan;
    }

    public function all() {
        return $this->artisan ->all();
    }


    public function collectionFilters() {
        return $this->artisan
                    ->orderByDesc('created_at')
                    ->get();
    }


    public function single($id) {
        return $this->artisan->find($id);
    }


}
