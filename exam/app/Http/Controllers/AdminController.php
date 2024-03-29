<?php

namespace App\Http\Controllers;
use App\Models\Vehicule;
use App\Models\Chauffeur;
use App\Models\Reservation;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showDashboard()
    {
        $totalusers = User::count();
        $totalreservations = Reservation::count();
        $totalVehicules = Vehicule::count();
        $totalChauffeurs = Chauffeur::count();
        $vehicules = Vehicule::all(); 
        return view('admin.dashboard', compact('totalVehicules','vehicules', 'totalChauffeurs', 'totalusers','totalreservations'));
    }

    public function chauffeur()
    {
        $totalusers = User::count();
        $totalreservations = Reservation::count();
        $totalreservations = Reservation::count();
        $totalVehicules = Vehicule::count();
        $totalchauffeurs = Chauffeur::count();
        //$totalchauffeurs = Chauffeur::all();
        $chauffeurs = Chauffeur::all();
        return view('admin.chauffeur', compact('totalVehicules','chauffeurs','totalchauffeurs','totalusers','totalreservations'));
    }

    public function utilisateur()
    {
        $totalusers = User::count();
        $totalreservations = Reservation::count();
        $totalVehicules = Vehicule::count();
        $totalchauffeurs = Chauffeur::count();
        $users = User::all();
        return view('admin.utilisateur', compact('totalVehicules','users','totalchauffeurs','totalreservations','totalusers'));
    }

    public function commande()
    {
        $totalusers = User::count();
        $totalreservations = Reservation::count();
        $totalusers = User::count();
        $totalVehicules = Vehicule::count();
        $totalVehicules = Vehicule::count();
        $totalchauffeurs = Chauffeur::count();
        $reservations = Reservation::all();
        return view('admin.commande', compact('totalVehicules','reservations','totalchauffeurs','totalreservations','totalusers'));
    }
}
