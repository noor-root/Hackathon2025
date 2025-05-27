<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['user_id', 'local_id', 'date', 'heure', 'duree', 'statut', 'planning_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function local()
    {
        return $this->belongsTo(Local::class);
    }

    public function planning()
    {
        return $this->belongsTo(Planning::class);
    }

    public function facturation()
    {
        return $this->hasOne(Facturation::class);
    }
}

