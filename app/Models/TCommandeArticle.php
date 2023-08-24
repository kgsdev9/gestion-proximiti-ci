<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TCommandeArticle extends Model
{
    use HasFactory;

     protected $guarded = [];

    // protected $fillable  = ['designation', 'prix', 'quantite', 'total', 'commande_id'];
}
