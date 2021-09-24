<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    /**
     * The produits that belong to the genre.
     */
    public function personnage()
    {
        return $this->belongsToMany(Personnage::class);
    }
}

