<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    protected $fillable = ['name'];

    public function locals()
    {
        return $this->belongsToMany(Local::class);
    }
}