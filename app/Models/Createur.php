<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Createur extends Model
{
    
    /**
     * Get the produits right by a author.
     */
    public function personnage()
    {
        return $this->hasMany(personnage::class);
    }
}
