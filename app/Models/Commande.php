<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;


    protected $guarderd = [];

    protected $fillable = ['designation', 'codeCommande',   'telephone', 'status', 'email', 'description', 'nomfournisseur', 'addresfournisseur'];


    public function explodeAttribute($price , $quantite) {

        $data = [];

        $parametre =  array_push($data[$price], $data[$quantite]);

        dd($parametre);


    }


    public function sommeCommande($items) {

        $erroers = [] ;
        if($items) {
            $resultat = collect($items);
        } else{
            $erroers[] = "la valuer n'existepas";
        }

        return $resultat ;
    }


}
