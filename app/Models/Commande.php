<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = ['codeCommande','expired_at', 'artisan_id', 'client_id'];

    public function sommeCommande($items) {

        $erroers = [] ;
        if($items) {
            $resultat = collect($items);
        } else{
            $erroers[] = "la valuer n'existe pas";
        }

        return $resultat ;
    }

    public function artisan() {
        return $this->belongsTo(Artisan::class, 'artisan_id');
    }

    public function client() {
        return $this->belongsTo(Client::class ,'client_id');
    }

}
