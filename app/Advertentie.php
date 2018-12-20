<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertentie extends Model
{
    protected $primaryKey = 'ad_id';

    public function gebruiker() {
        return $this->belongsTo('\App\Gebruiker', 'verkoper_id', 'gebr_id');
    }

    public function rubriek() {
        return $this->belongsTo('\App\Rubriek', 'rubriek_id', 'rubr_id');
    }
}
