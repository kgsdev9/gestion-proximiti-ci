<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artisan extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'slug', 'prenom', 'telephone', 'num_whattsapp','adresse', 'photo', 'email', 'description', 'commune', 'date_adhesion', 'speciality_id', 'commune', 'date_adhesion', 'zone_intervention', 'status', 'referent', 'numero_referent'
];


    public function specialites() {
        return $this->belongsToMany(Speciality::class,'artisan_speciality','artisan_id','speciality_id');
    }

    public function medias() {
        return $this->hasMany(Media::class);
    }

    public function messages() {
        return $this->belongsToMany(Message::class, 'artisan_message', 'artisan_id', 'message_id');
    }


}
