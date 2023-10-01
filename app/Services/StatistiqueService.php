<?php

namespace App\Services;

use App\Repositories\StatistiqueRepository;

class StatistiqueService {


    protected $statistiqueRepository ;

    public function __construct(StatistiqueRepository $statistiqueRepository)
    {
        $this->statistiqueRepository = $statistiqueRepository;
    }

    public function countCommande() {
        return $this->statistiqueRepository->countCommande();
    }

    public function countEquipment() {
        return $this->statistiqueRepository->countEquipment();
    }

    public function countMission() {
        return $this->statistiqueRepository->countMission();
    }

    public function countUsers() {
        return $this->statistiqueRepository->countUsers();
    }

    public function countArtisans() {
        return $this->statistiqueRepository->countArtisans();
    }



}
