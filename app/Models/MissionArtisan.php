<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissionArtisan extends Model
{
    use HasFactory;

    protected $fillable = ['designation','date_debut', 'date_fin', 'artisan_id', 'description'];

    public function artisan() {
        return $this->belongsTo(Artisan::class, 'artisan_id');
    }

}
