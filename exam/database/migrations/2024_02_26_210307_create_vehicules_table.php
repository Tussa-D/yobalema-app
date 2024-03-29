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
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('marque');
            $table->string('model');
            $table->date('date_achat');
            $table->integer('km_par_defaut');
            $table->string('matricule');
            $table->string('tarif_journalier');
            $table->enum('statut', ['disponible', 'indisponible']); // Ajout de la colonne pour le statut
            //$table->string('image')->nullable();
            // $table->unsignedBigInteger('chauffeur_id')->nullable();
            // $table->foreign('chauffeur_id')->references('id')->on('chauffeurs')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicules');
    }
};
