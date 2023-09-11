<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TCommandeArticle extends Model
{
    use HasFactory;

     protected $guarded = [];

    public function sommeCommande($items) {

        $erroers = [] ;
        if($items) {
            $resultat = collect($items)->sum('total');
        } else{
            $erroers[] = "la valuer n'existepas";
        }

        return $resultat ;
    }


}
