<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubriek extends Model
{
    /*  refereert naar de te gebruiken tabel  */
    protected $table = 'rubrieken';
    protected $primaryKey = 'rubr_id';
}
