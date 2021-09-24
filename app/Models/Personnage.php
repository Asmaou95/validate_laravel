<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnage extends Model
{
    /**
     * Get the createur that writes the produit.
     */
    public function createur()
    {
        return $this->belongsTo(Createur::class);
    }
    
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
