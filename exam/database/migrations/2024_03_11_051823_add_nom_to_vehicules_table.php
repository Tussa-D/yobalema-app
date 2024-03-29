<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNomToVehiculesTable extends Migration
{
    public function up()
    {
        Schema::table('vehicules', function (Blueprint $table) {
            $table->string('nom')->nullable()->after('id'); // Ajoutez la colonne 'nom' après la colonne 'id'
        });
    }

    public function down()
    {
        Schema::table('vehicules', function (Blueprint $table) {
            $table->dropColumn('nom'); // Supprimez la colonne lors du rollback
        });
    }
}

