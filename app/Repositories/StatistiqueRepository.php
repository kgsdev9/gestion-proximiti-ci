<?php

namespace App\Repositories;

use App\Models\Artisan;
use App\Models\Client;
use App\Models\Commande;
use App\Models\Equipement;
use App\Models\Mission;
use App\Models\Speciality;
use App\Models\User;

class StatistiqueRepository {

    protected $user ;
    protected $artisan ;
    protected $commande ;
    protected $equipment ;
    protected $specialite ;
    protected $client;
    protected $devis;
    protected $mission;


    public function __construct(User $user, Artisan $artisan, Speciality $specialite, Equipement $equipement, Client $client, Mission $mission, Commande $commande)
    {
        $this->user = $user;
        $this->artisan = $artisan;
        $this->specialite = $specialite;
        $this->equipment  = $equipement;
        $this->client = $client ;
        $this->mission = $mission;
        $this->commande = $commande;
    }

    public function countCommande() {
        return $this->commande->count();
    }

    public function countEquipment() {
        return $this->equipment->count();
    }

    public function countMission() {
        return $this->mission->count();
    }

    public function countUsers() {
        return $this->user->count();
    }

    public function countArtisans() {
        return $this->artisan->count();
    }

    public function countSpecialites() {
        return $this->specialite->count();
    }



}
