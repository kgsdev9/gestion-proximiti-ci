<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    // protected $guarded = [];

    protected $fillable = ['designation', 'prix', 'quantite', 'commande_id', ];



 public function commande() {
    return $this->belongsTo(Commande::class, 'commande_id');
 }
}
