<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gebruiker extends Model
{
    /*  refereert naar de te gebruiken tabel  */
    protected $primaryKey = 'gebr_id';

    public function advertenties() {
        return $this->hasMany('\App\Advertentie', 'verkoper_id', 'gebr_id');
    }
}
