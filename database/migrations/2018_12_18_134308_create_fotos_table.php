<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotos', function (Blueprint $table) {
            $table->increments('foto_id');
            $table->string('foto_naam');
            $table->unsignedInteger('advertentie_id');
            $table->timestamps();
        });

        Schema::table('fotos', function (Blueprint $table) {
            $table->foreign('advertentie_id')->references('ad_id')->on('advertenties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fotos');
    }
}
