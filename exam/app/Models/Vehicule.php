<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $fillable = ['marque','model', 'date_achat', 'km_par_defaut', 'matricule', 'statut', 'tarif_journalier', 'chauffer_id'];

    // public function chauffeur()
    // {
    //     return $this->belongsTo(Chauffeur::class);
    // }public function chauffeur()
    public function chauffeur()
    {
        return $this->hasOne(Chauffeur::class);
    }




    // public function getTarifJournalierAttribute()
    // {
    //     // Définissez le tarif journalier en fonction du type de véhicule
    //     if ($this->type === 'berline') {
    //         return 30000; // Tarif journalier pour les berlines
    //     } elseif ($this->type === 'suv') {
    //         return 50000; // Tarif journalier pour les SUV
    //     }

    //     // Par défaut, retournez 0 si le type de véhicule n'est pas défini
    //     return 0;
    // }


    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($vehicule) {
            // Supprimer le chauffeur associé au véhicule
            if ($vehicule->chauffeur) {
                $vehicule->chauffeur->delete();
            }
        });
    }
}
