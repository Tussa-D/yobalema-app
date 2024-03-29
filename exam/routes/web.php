<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\DriverRatingController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//route utilisateur
Route::get('/home',[UtilisateurController::class, 'index'])->name('user-accueil');

// Routes pour la gestion des réservations
Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
Route::get('/reservation/{id}/invoice', [ReservationController::class, 'showInvoice'])->name('reservation.showInvoice');
Route::get('/reservations/{reservation}', [ReservationController::class, 'show'])->name('reservations.show');
Route::get('/reservations/{reservation}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');
Route::put('/reservations/{reservation}', [ReservationController::class, 'update'])->name('reservations.update');
Route::delete('/reservations/{reservation}', [ReservationController::class, 'destroy'])->name('reservations.destroy');

// Route pour la facturation
Route::get('reservation/invoice/{id}', [ReservationController::class, 'showInvoice'])->name('reservation.invoice');
// Route pour afficher le formulaire de modification de la réservation
Route::get('reservations/{id}/edit', [ReservationController::class, 'edit'])->name('reservation.edit');

// Route pour traiter la mise à jour de la réservation
Route::put('reservations/{id}', [ReservationController::class, 'update'])->name('reservation.update');

// Route pour afficher la page de paiement de la réservation
Route::get('reservations/{id}/pay', [ReservationController::class, 'pay'])->name('reservation.pay');

// Route pour traiter le paiement de la réservation
Route::post('reservations/{id}/payment', [ReservationController::class, 'processPayment'])->name('reservation.processPayment');


// Routes pour l'authentification

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Route pour le dashboard administrateur

Route::get('/admin/dashboard', [AdminController::class, 'showDashboard'])->name('dashboard');
Route::get('/admin/dashboard/chauffeur', [AdminController::class, 'chauffeur'])->name('dashChauffeur');
Route::get('/admin/dashboard/utilisateur', [AdminController::class, 'utilisateur'])->name('dashUtilisateur');
Route::get('/admin/dashboard/commande', [AdminController::class, 'commande'])->name('dashCommande');

//Route pour les note chauffeurs
// Route::post('/driver-ratings', [DriverRatingController::class, 'store'])->name('driver-ratings.store');

Route::post('/chauffeur/{chauffeur}/rate', [ChauffeurController::class, 'rate'])->name('chauffeur.rate');


// Routes pour afficher la liste des chauffeurs
Route::get('/chauffeurs', [ChauffeurController::class, 'index'])->name('chauffeur.index');

// Route pour afficher le formulaire de création d'un chauffeur
Route::get('/chauffeurs/create', [ChauffeurController::class, 'create'])->name('chauffeur.create');

// Route pour enregistrer un nouveau chauffeur
Route::post('/chauffeurs', [ChauffeurController::class, 'store'])->name('chauffeur.store');

// Route pour afficher les détails d'un chauffeur spécifique
Route::get('/chauffeurs/{chauffeur}', [ChauffeurController::class, 'show'])->name('chauffeur.show');

// Route pour afficher le formulaire de modification d'un chauffeur
Route::get('/chauffeurs/{chauffeur}/edit', [ChauffeurController::class, 'edit'])->name('chauffeur.edit');

// Route pour mettre à jour un chauffeur spécifique
Route::put('/chauffeurs/{chauffeur}', [ChauffeurController::class, 'update'])->name('chauffeur.update');

// Route pour supprimer un chauffeur spécifique
Route::delete('/chauffeurs/{chauffeur}', [ChauffeurController::class, 'destroy'])->name('chauffeur.destroy');

//Route pour les vehicules

// Routes pour afficher la liste des vehicules
Route::get('/vehicules', [VehiculeController::class, 'index'])->name('vehicule.index');

// Route pour afficher le formulaire de création d'un vehicule
Route::get('/vehicules/create', [VehiculeController::class, 'create'])->name('vehicule.create');

// Route pour enregistrer un nouveau vehicule
Route::post('/vehicules', [VehiculeController::class, 'store'])->name('vehicule.store');

// Route pour afficher les détails d'un vehicule spécifique
Route::get('/vehicules/{vehicule}', [VehiculeController::class, 'show'])->name('vehicule.show');

// Route pour afficher le formulaire de modification d'un vehicule
Route::get('/vehicules/{vehicule}/edit', [VehiculeController::class, 'edit'])->name('vehicule.edit');

// Route pour mettre à jour un vehicule spécifique
Route::put('/vehicules/{vehicule}', [VehiculeController::class, 'update'])->name('vehicule.update');

// Route pour supprimer un vehicule spécifique
Route::delete('/vehicules/{vehicule}', [VehiculeController::class, 'destroy'])->name('vehicule.destroy');

// Routes pour l'interface utilisateur
//Route::get('/home', [HomeController::class, 'index'])->name('home');

// Routes pour l'interface administrateur
// Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
//     Route::get('/dashboard', [AuthController::class, 'authenticate'])->name('admin.dashboard');
//     // Ajoutez d'autres routes pour l'interface administrateur ici
// });


// Rote pour mes reservations
Route::get('/reservations/mes-reservations', [ReservationController::class, 'mesReservations'])->name('reservations.mesReservations');

