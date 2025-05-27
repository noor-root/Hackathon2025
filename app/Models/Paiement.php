<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    protected $fillable = ['id_facture', 'status', 'methode', 'date_paiement'];

    public function facturation()
    {
        return $this->belongsTo(Facturation::class, 'id_facture');
    }
}

