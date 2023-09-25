<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    use HasFactory;

    protected $fillable = ['libelle', 'description'];


    public function artisans() {
        return $this->belongsToMany(Artisan::class, 'specialite_id', 'artisan_id');
    }

    public function  missions() {
        return $this->belongsToMany(Mission::class, 'mission_specialite');
    }

}

