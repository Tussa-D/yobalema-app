<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DriverRating;
use App\Models\Chauffeur;

class DriverRatingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'note' => 'required|integer|min:1|max:5',
            'commentaire' => 'nullable|string|max:255',
            'chauffeur_id' => 'required|exists:chauffeurs,id',
        ]);

        DriverRating::create([
            'note' => $request->note,
            'commentaire' => $request->commentaire,
            'chauffeur_id' => $request->chauffeur_id,
        ]);

        return redirect()->back()->with('success', 'Notation enregistrée avec succès.');
    }
}
