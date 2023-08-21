<?php

namespace App\Models\Caisse;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entree extends Model
{
    use HasFactory;

    protected $fillable = ['designation', 'montant',  'description'];


    public function sommeEntriesCount($items) {

        if($items) {
            $collections =  collect($items)->sum('montant');
        } 

        return $collections ;
    }

}

