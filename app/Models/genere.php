<?php

namespace App\Models;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Model;

class genere extends Model
{
    Protected $fillable = [
        'name'
    ];

    public function movies(){
        return $this->belongsToMany(Movie::class);
    }
}
