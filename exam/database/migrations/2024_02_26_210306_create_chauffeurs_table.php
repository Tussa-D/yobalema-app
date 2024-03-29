<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chauffeurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('experience');
            $table->string('numero_permis');
            $table->date('date_emission');
            $table->date('expiration');
            $table->string('categorie');
            $table->string('contrat');
             // Ajout de la clé étrangère pour référencer les véhicules
            // $table->unsignedBigInteger('vehicule_id')->nullable();
            // $table->foreign('vehicule_id')->references('id')->on('vehicules')->onDelete('set null');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chauffeurs');
    }
};
