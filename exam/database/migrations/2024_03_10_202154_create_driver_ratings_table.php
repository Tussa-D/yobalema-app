<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chauffeur_id');
            $table->foreign('chauffeur_id')->references('id')->on('chauffeurs')->onDelete('cascade');
            $table->unsignedTinyInteger('note');
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
        Schema::dropIfExists('driver_ratings');
    }
}
