<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubriek extends Model
{
    /*  refereert naar de te gebruiken tabel  */
    protected $table = 'rubrieken';
    protected $primaryKey = 'rubr_id';

    public function advertenties() {
        return $this->hasMany('\App\Advertentie', 'rubriek_id', 'rubr_id');
    }
}
