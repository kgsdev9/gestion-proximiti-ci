<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'artisan_id', 'piece'];

    public function artisan() {
        return $this->belongsTo(Media::class, 'artisan_id');
    }   

}
