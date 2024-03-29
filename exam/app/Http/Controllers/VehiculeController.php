<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use App\Models\Chauffeur;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    public function create()
    {
        $chauffeurs = Chauffeur::all();
        return view('vehicule.create', compact('chauffeurs'));
    }


    public function index()
    {


        $vehicules = Vehicule::all();
        $totalVehicules = Vehicule::count();
        $totalchauffeurs = Chauffeur::count();
        $totalusers = User::count();
        $totalreservations = Reservation::count();
        return view('vehicule.index', compact(
            'vehicules',
            'totalVehicules',
            'totalusers',
            'totalchauffeurs',
            'totalreservations'
        ));
    }


    public function show(Vehicule $vehicule)
    {
        return view('vehicule.show', compact('vehicule'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'marque' => 'required',
            'model' => 'required',
            'date_achat' => 'required',
            'km_par_defaut' => 'required',
            'matricule' => 'required',
            'statut' => 'required',
            'tarif_journalier' => 'required',
           // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ajoutez la validation pour le champ image
        ]);
    
        // Téléchargement et stockage de l'image
        //if ($request->hasFile('image')) {
            //$imagePath = $request->file('image')->store('vehicule_images', 'public');
        //} else {
           // $imagePath = null; // Si aucune image n'est téléchargée
        //}
    
        // Créez le véhicule avec les données du formulaire
        Vehicule::create([
            'marque' => $request->marque,
            'model' => $request->model,
            'date_achat' => $request->date_achat,
            'km_par_defaut' => $request->km_par_defaut,
            'matricule' => $request->matricule,
            'statut' => $request->statut,
            'tarif_journalier' => $request->tarif_journalier,
            //'image' => $imagePath, // Ajoutez le chemin de l'image
        ]);
    
        return redirect()->route('dashboard')->with('success', 'Véhicule créé avec succès.');
    }
    


    public function edit(Vehicule $vehicule)
    {
        return view('vehicule.edit', compact('vehicule'));
    }


    public function update(Request $request, Vehicule $vehicule)
    {
        $request->validate([
            'type' => 'required',
            'nom' => 'required',
            'date_achat' => 'required',
            'km_par_defaut' => 'required',
            'matricule' => 'required',
            'statut' => 'required',
            'tarif_journalier' => 'required',
            // Autres validations...
        ]);

        $vehicule->update($request->all());

        return redirect()->route('vehicule.index')
            ->with('success', 'vehicule mis à jour avec succès.');
    }


    public function destroy(Vehicule $vehicule)
    {
        $vehicule->delete();

        return redirect()->route('vehicule.index')
            ->with('success', 'vehicule supprimé avec succès.');
    }
}
