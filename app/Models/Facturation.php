<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facturation extends Model
{
    protected $fillable = ['reservation_id', 'montant', 'date_creation', 'file_path'];

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }

    public function paiement()
    {
        return $this->hasOne(Paiement::class, 'id_facture');
    }
}

