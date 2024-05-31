<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DiplomeController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\AnneeEtudeController;
use App\Http\Controllers\TypeBourseController;
use App\Http\Controllers\UniversiteController;
use App\Http\Controllers\PieceJointeController;
use App\Http\Controllers\EtablissementController;
use App\Http\Controllers\AnneeAcademiqueController;

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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::redirect('/home', '/');

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
    Route::resource('formulaires', FormulaireController::class);
    Route::resource('type-champs', TypeChampController::class, ["only" => ["index", "show"]]);
    Route::resource('champ-formulaires', ChampFormulaireController::class, ["only" => ["store", "destroy"]]);
});
