<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiedingenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biedingen', function (Blueprint $table) {
            $table->increments('bod_id');
            $table->unsignedInteger('advertentie_id');
            $table->unsignedInteger('koper_id');
            $table->decimal('bod');
            $table->timestamps();
        });

        Schema::table('biedingen', function (Blueprint $table) {
            $table->foreign('advertentie_id')->references('ad_id')->on('advertenties');
            $table->foreign('koper_id')->references('gebr_id')->on('gebruikers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biedingen');
    }
}
