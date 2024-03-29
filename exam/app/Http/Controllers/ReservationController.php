<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Vehicule;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class ReservationController extends Controller
{
    // Fonction affichant le formulaire de réservation
    public function create()
    {
        $vehicles = Vehicule::where('statut', 'disponible')->get();
        return view('reservations.create', compact('vehicles'));
    }

    //Fonction qui affiche les reservations de l'utilisateur

    public function mesReservations()
{
    // Récupérer l'utilisateur actuellement connecté
    $user = auth()->user();

    // Vérifier si l'utilisateur est connecté
    if ($user) {
        // Récupérer les réservations de l'utilisateur
        $reservations = $user->reservations;

        // Passer les réservations à la vue
        return view('reservations.mes_reservations', compact('reservations'));
    } else {
        // Gérer le cas où l'utilisateur n'est pas connecté
        return redirect()->route('login')->with('error', 'Veuillez vous connecter pour accéder à cette page');
    }
}

    // Fonction de stockage de la réservation
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'start_date' => ['required', 'date', 'date_format:Y-m-d', 'after_or_equal:today'],
            'end_date' => ['required', 'date', 'date_format:Y-m-d', 'after:start_date'],
            'vehicle_id' => 'required|exists:vehicules,id',
        ], [
            'start_date.after_or_equal' => 'La date de début doit être une date future ou égale à aujourd\'hui.',
            'end_date.after' => 'La date de fin doit être postérieure à la date de début.',
        ]);

        // Vérifier si la voiture est déjà réservée pour la période spécifiée
        $vehicle = Vehicule::findOrFail($request->vehicle_id);
        $existingReservation = Reservation::where('vehicle_id', $vehicle->id)
            ->where(function ($query) use ($request) {
                $query->where('start_date', '<=', $request->end_date)
                    ->where('end_date', '>=', $request->start_date);
            })
            ->first();

        if ($existingReservation) {
            return redirect()->back()->with('error', 'La voiture est déjà réservée pour la période spécifiée.');
        }

        // Calculer le nombre de jours de location
        $start_date = Carbon::parse($request->start_date);
        $end_date = Carbon::parse($request->end_date);
        $diff_days = $end_date->diffInDays($start_date) + 1; // Inclure le jour de départ dans le calcul

        // Récupérer le tarif journalier du véhicule
        $tarif_journalier = $vehicle->tarif_journalier;

        // Calculer le montant total en fonction du tarif journalier et du nombre de jours de location
        $montant_total = $diff_days * $tarif_journalier;

        // Créer une nouvelle instance de réservation avec le montant total
        $reservation = Reservation::create([
            'user_id' => auth()->id(),
            'vehicle_id' => $request->vehicle_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'montant_total' => $montant_total, // Stocker le montant total
        ]);

        // Rediriger avec un message de succès
        return redirect()->route('reservation.invoice', ['id' => $reservation->id])->with('success', 'Réservation créée avec succès.');
    }


    // Fonction pour afficher la facture
    public function showInvoice($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('reservations.invoice', compact('reservation'));
    }

    // Méthode pour afficher le formulaire de modification de la réservation
    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);
        $vehicles = Vehicule::all(); // Récupérez tous les véhicules
        return view('reservations.edit', compact('reservation', 'vehicles'));
    }

    // Méthode pour mettre à jour la réservation
    public function update(Request $request, $id)
    {
        $request->validate([
            'start_date' => ['required', 'date', 'date_format:Y-m-d', 'after_or_equal:today'],
            'end_date' => ['required', 'date', 'date_format:Y-m-d', 'after:start_date'],
            // Ajoutez d'autres règles de validation au besoin
        ], [
            'start_date.after_or_equal' => 'La date de début doit être une date future ou égale à aujourd\'hui.',
            'end_date.after' => 'La date de fin doit être postérieure à la date de début.',
            // Ajoutez d'autres messages d'erreur personnalisés au besoin
        ]);

        // Trouver la réservation à mettre à jour
        $reservation = Reservation::findOrFail($id);

        // Mettre à jour les données de la réservation
        $reservation->start_date = $request->start_date;
        $reservation->end_date = $request->end_date;
        // Mettez à jour d'autres champs de réservation au besoin

        // Enregistrer les modifications
        $reservation->save();

        // Rediriger avec un message de succès
        return redirect()->route('reservation.showInvoice', ['id' => $reservation->id])
            ->with('success', 'Réservation modifiée avec succès.');
    }

    // Méthode pour afficher la page de paiement de la réservation
    public function pay($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('reservations.payment', compact('reservation'));
    }

    // Méthode pour traiter le paiement de la réservation
    public function processPayment(Request $request, $id)
    {
        // Ajoutez votre logique de paiement ici
        // ...

        return redirect()->route('dashboard')->with('success', 'Paiement effectué avec succès.');
    }



    

public function show($id)
{
    // Récupérer la réservation avec l'identifiant donné
    $reservation = Reservation::findOrFail($id);

    // Passer la réservation à la vue
    return view('reservations.show', compact('reservation'));
}

}
