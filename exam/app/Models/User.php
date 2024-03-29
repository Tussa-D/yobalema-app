<?php



namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
        'role', // Ajouter le champ de rôle
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Rôle par défaut
    // protected $attributes = [
    //     'role' => 'user',
    // ];

    //link avec les reservation
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

     // Vérifie si l'utilisateur est un administrateur
     public function isAdmin()
     {
         return $this->role === 'admin';
     }
}
