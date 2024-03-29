<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UtilisateurController extends Controller
{
    //
public function index()
{
    return view('utilisateur.home');
}

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            // Ajoutez d'autres règles de validation si nécessaire
        ]);

        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('users.index')->with('success', 'Utilisateur mis à jour avec succès.');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return redirect()->route('users.index')->with('success', 'Utilisateur supprimé avec succès.');
    }
}
