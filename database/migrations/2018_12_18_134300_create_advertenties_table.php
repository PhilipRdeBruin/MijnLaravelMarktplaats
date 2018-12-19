<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertentiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertenties', function (Blueprint $table) {
            $table->increments('ad_id');
            $table->string('ad_naam');
            $table->text('ad_tekst');
            $table->unsignedInteger('rubriek_id');
            $table->unsignedInteger('verkoper_id');
            $table->decimal('art_prijs');
            $table->tinyInteger('prijs_vanaf');
            $table->tinyInteger('prijs_vanaf2');
            $table->string('ad_status');
            $table->timestamps();
        });

        Schema::table('advertenties', function (Blueprint $table) {
            $table->foreign('rubriek_id')->references('rubr_id')->on('rubrieken')->unsigned();
            $table->foreign('verkoper_id')->references('gebr_id')->on('gebruikers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertenties');
    /*    Schema::drop('priorities');  */

    }
}
