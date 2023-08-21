<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artisan extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'slug', 'prenom', 'telephone', 'num_whattsapp','adresse', 'photo', 'email', 'description', 'commune', 'date_adhesion', 'speciality_id', 'commune', 'date_adhesion', 'zone_intervention', 'status'];



    public function specilaite() {
        return $this->belongsTo(Speciality::class, 'speciality_id');
    }

    public function medias() {
        return $this->hasMany(Media::class);
    }



}
