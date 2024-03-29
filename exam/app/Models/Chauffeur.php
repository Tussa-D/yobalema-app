<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'experience',
        'numero_permis',
        'date_emission',
        'expiration',
        'categorie',
        'contrat',
        'note',
    ];

    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($chauffeur) {
            // Supprimer le véhicule associé au chauffeur
            if ($chauffeur->vehicule) {
                $chauffeur->vehicule->delete();
            }
        });
    }
}


