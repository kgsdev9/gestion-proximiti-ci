<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
    'nom',
    'prenom',
    'adresse',
    'email',
    'codeClient',
    'mode_contact',
    'premimum',
    'date_contact',
    'telephone',
    'commune'
    ];
}
