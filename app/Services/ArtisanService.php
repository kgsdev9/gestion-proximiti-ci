<?php

namespace App\Services;
use App\Repositories\ArtisanRepository;


class ArtisanService
{
    protected $artisanRepositories ;
    protected $mediaService ;
    protected $missionService ;

     public function __construct(ArtisanRepository $artisanRepositories, MediaService $mediaService, MissionService $missionService)
     {
        $this->artisanRepositories = $artisanRepositories;
        $this->mediaService = $mediaService;
        $this->missionService = $missionService;
     }

     public function all() {
        return $this->artisanRepositories->all();
    }

    public function single($id) {
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

    public function singleAssignementArtisan(int $id) {
        return $this->missionService->singleAssigmentArtisan($id);
    }
}
