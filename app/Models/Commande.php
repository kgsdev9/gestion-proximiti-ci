<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;


    protected $guarderd = [];

    protected $fillable = ['designation', 'codeCommande',   'telephone', 'status', 'email', 'description', 'nomfournisseur', 'addresfournisseur'];

    public function tcommandeArticle(){
        return $this->hasMany(TCommandeArticle::class);
    }
}
