<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['message', 'total_envoi', 'user_id'];


    public function artisans() {
        return $this->belongsToMany(Artisan::class, 'artisan_message', 'message_id', 'artisan_id');
    }

}
