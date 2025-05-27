<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $fillable = ['type', 'capacite', 'prix', 'location', 'status'];

    public function plannings()
    {
        return $this->hasMany(Planning::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function equipements()
    {
        return $this->belongsToMany(Equipement::class);
    }
}

