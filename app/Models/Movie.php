<?php

namespace App\Models;

use App\Models\Genre;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'director', 'year', 'plot', 'img', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function Genres(){
        return $this->belongsToMany(Genre::class);
    }
}
