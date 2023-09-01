<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TFournisseur extends Model
{
    use HasFactory;

    protected $fillable=  ['designation', 'adresse', 'prix', 'commune', 'telephone', 'fixe', 'email'];
}
