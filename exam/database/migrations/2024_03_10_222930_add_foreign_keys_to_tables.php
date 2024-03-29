<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTables extends Migration
{
    public function up()
    {
        Schema::table('vehicules', function (Blueprint $table) {
            $table->unsignedBigInteger('chauffeur_id')->nullable();
            $table->foreign('chauffeur_id')->references('id')->on('chauffeurs')->onDelete('set null');
        });

        Schema::table('chauffeurs', function (Blueprint $table) {
            $table->unsignedBigInteger('vehicule_id')->nullable();
            $table->foreign('vehicule_id')->references('id')->on('vehicules')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('vehicules', function (Blueprint $table) {
            $table->dropForeign(['chauffeur_id']);
            $table->dropColumn('chauffeur_id');
        });

        Schema::table('chauffeurs', function (Blueprint $table) {
            $table->dropForeign(['vehicule_id']);
            $table->dropColumn('vehicule_id');
        });
    }
}

