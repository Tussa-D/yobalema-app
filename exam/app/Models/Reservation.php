<?php

// app/Models/Reservation.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'vehicle_id',
        'start_date',
        'end_date',
        'montant_total',
    ];

    // Relation avec le modèle User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec le modèle Vehicule
    public function vehicle()
    {
        return $this->belongsTo(Vehicule::class);
    }
}


