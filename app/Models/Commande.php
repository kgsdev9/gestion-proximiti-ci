<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;


    // protected $guarded = [];

    protected $fillable = ['fullname','code_client', 'telephone_client', 'codeCommande', 'adresse_intervention', 'expired_at'];


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
