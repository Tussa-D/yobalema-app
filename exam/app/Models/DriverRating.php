<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverRating extends Model
{
    use HasFactory;

    protected $fillable = [
        'chauffeur_id',
        'note',
    ];


    public function chauffeur()
    {
        return $this->belongsTo(Chauffeur::class);
    }
}
