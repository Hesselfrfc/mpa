<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Song;

class Genre extends Model
{
    use HasFactory;

    /**
     * Get the songs for this genre.
     */
    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
