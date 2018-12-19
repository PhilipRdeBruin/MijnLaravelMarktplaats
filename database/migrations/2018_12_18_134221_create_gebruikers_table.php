<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGebruikersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gebruikers', function (Blueprint $table) {
            $table->increments('gebr_id');
            $table->string('gebr_naam')->unique();
            $table->string('gebr_rechten');
            $table->string('voornaam');
            $table->string('intialen');
            $table->string('tussenv');
            $table->string('achternaam');
            $table->string('adres');
            $table->string('postcode');
            $table->string('woonplaats');
            $table->string('telefoon');
            $table->string('mobiel');
            $table->string('email')->unique();
            $table->string('wachtwoord');
            $table->rememberToken();
            $table->dateTime('l_upd_profiel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gebruikers');
    }
}
