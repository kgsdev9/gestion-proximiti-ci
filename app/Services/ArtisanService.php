<?php

namespace App\Services;
use App\Repositories\ArtisanRepository;


class ArtisanService
{
    protected $artisanRepositories ;
    protected $mediaService ;

     public function __construct(ArtisanRepository $artisanRepositories, MediaService $mediaService)
     {
        $this->artisanRepositories = $artisanRepositories;
        $this->mediaService = $mediaService;
     }

     public function all() {
        return $this->artisanRepositories->all();
    }

    public function single(int $id) {
        return $this->artisanRepositories->single($id);
    }

    public function getMediaArtisan(int $id) {
        return $this->mediaService->getMediaArtisan($id);
    }


    public function save(Object $data) {
        return $this->artisanRepositories->save($data);
    }

    public function update(Object $data, int $id) {
        return $this->artisanRepositories->update($data, $id);
    }

    public function destroy(int $id) {
        return $this->artisanRepositories->destroy($id);
    }
}
