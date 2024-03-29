<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Affiche le formulaire de connexion.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Traite la demande de connexion de l'utilisateur.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function authenticate(Request $request)
    {
        // Valider les données du formulaire
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Authentifier l'utilisateur
        if (Auth::attempt($credentials)) {
            // Récupérer l'utilisateur authentifié
            $user = Auth::user();

            // Vérifier le rôle de l'utilisateur
            if ($user->role === 'admin') {
                // Rediriger l'administrateur vers le tableau de bord d'administration
                return redirect()->intended('/admin/dashboard');
            } else {
                // Rediriger l'utilisateur normal vers son tableau de bord
                return redirect()->intended('/home');
            }
        }

        // En cas d'échec d'authentification, rediriger vers la page de connexion avec un message d'erreur
        return redirect('/')->with('error', 'Email ou mot de passe incorrecte');
    }

    /**
     * Déconnecte l'utilisateur.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Affiche le formulaire d'inscription.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Traite la soumission du formulaire d'inscription.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Créer un nouvel utilisateur
        User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user', // Ajoutez un rôle par défaut
        ]);



        // Rediriger l'utilisateur vers la page souhaitée après l'inscription
        return redirect()->intended('/');
    }
}
