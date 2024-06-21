<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PvController;
use App\Http\Controllers\LotController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TauxController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DiplomeController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\EligibleController;
use App\Http\Controllers\AnneeEtudeController;
use App\Http\Controllers\TypeBourseController;
use App\Http\Controllers\UniversiteController;
use App\Http\Controllers\PieceJointeController;
use App\Http\Controllers\DemandeBilletController;
use App\Http\Controllers\EtablissementController;
use App\Http\Controllers\AnneeAcademiqueController;
use App\Http\Controllers\DemandePaiementController;
use App\Http\Controllers\DemandeAllocationController;
use App\Http\Controllers\DemandeReclamationController;
use App\Http\Controllers\VerificationBoursierController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('theme-toggle', function () {
    if (session('theme')) {
        session()->forget('theme');
    } else {
        session(['theme' => 'dark']);
    }
    return back();
})->name('theme-toggle');


Route::middleware(['auth', 'update-last-login', 'VerificationBoursier',])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::redirect('/home', '/');
Route::middleware(['auth', 'update-last-login',])->group(function () {

Route::get('verification-boursier',[VerificationBoursierController::class, 'index'] )->name('route-verification');
Route::post('urlenregistrement',[VerificationBoursierController::class, 'store'] )->name('route-enregistrer');
});

Route::middleware(['auth', 'update-last-login', 'permission:gerer users',])->group(function () {
    Route::resource("users", UserController::class);
    Route::post('users/{user_id}/roles', [UserController::class, 'storeRole'])->name('users.storeRole');
});
Route::middleware(['auth', 'update-last-login', 'permission:gerer roles'])->group(function () {
    Route::resource("roles", RoleController::class);
    Route::post('roles/{role}/permissions', [RoleController::class, 'storePermissions'])->name('roles.storePermissions');
});

Route::middleware(['auth', 'permission:gerer parametre de base systeme'])->group(function () {
    Route::resource('pays', PayController::class);
    Route::resource('annee-etudes', AnneeEtudeController::class);
    Route::resource('diplomes', DiplomeController::class);
    Route::resource('annee-academiques', AnneeAcademiqueController::class);
    Route::resource('universites', UniversiteController::class);
    Route::resource('etablissements', EtablissementController::class);
    Route::resource('filieres', FiliereController::class);
    Route::resource('piece-jointes', PieceJointeController::class);
    Route::resource('type-bourses', TypeBourseController::class);
    Route::resource('pvs', PvController::class);
    Route::resource('lots', LotController::class);
    Route::resource('tauxes', TauxController::class);
    Route::resource('eligibles', EligibleController::class);
    Route::resource('demande-reclamations', DemandeReclamationController::class);
    Route::resource('demande-paiements', DemandePaiementController::class);
    Route::resource('demande-billets', DemandeBilletController::class);
    Route::resource('demande-allocations', DemandeAllocationController::class);
    Route::resource('formulaires', FormulaireController::class);
    Route::resource('type-champs', TypeChampController::class, ["only" => ["index", "show"]]);
    Route::resource('champ-formulaires', ChampFormulaireController::class, ["only" => ["store", "destroy"]]);
});

Route::middleware(['auth', 'permission:gerer lots'])->group(function () {
    Route::resource("lots", LotController::class);
});
Route::middleware(['auth', 'permission:gerer pv'])->group(function () {
    Route::resource("pvs", PvController::class);
});
Route::middleware(['auth', 'permission:gerer taux'])->group(function () {
    Route::resource("tauxes", TauxController::class);
});
Route::middleware(['auth', 'permission:gerer eligibles'])->group(function () {
    Route::resource('eligibles', EligibleController::class);
});