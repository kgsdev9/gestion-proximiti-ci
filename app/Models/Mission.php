<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;

    protected $fillable = ['libelle', 'description', 'date_debut', 'date_fin', 'artisan_id', 'client_id', 'type', 'status'];


    public function  specialites() {
        return $this->belongsToMany(Speciality::class, 'mission_specialite');
    }

    public function client() {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function artisan() {
        return $this->belongsTo(Artisan::class, 'artisan_id');

}

}
