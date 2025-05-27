<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
    protected $fillable = ['local_id', 'date_debut', 'date_fin', 'isreserved'];

    public function local()
    {
        return $this->belongsTo(Local::class);
    }

    public function reservation()
    {
        return $this->hasOne(Reservation::class);
    }
}

