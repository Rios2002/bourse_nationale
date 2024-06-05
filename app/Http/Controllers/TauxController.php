<?php

namespace App\Http\Controllers;

use App\Models\Taux;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TauxRequest;
use App\Models\AnneeAcademique;
use App\Models\AnneeEtude;
use App\Models\Filiere;
use App\Models\Pay;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TauxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tauxes = Taux::paginate();

        return view('taux.index', compact('tauxes'))
            ->with('i', ($request->input('page', 1) - 1) * $tauxes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $taux = new Taux();
        $pays = Pay::all();
        $filieres = Filiere::all();
        $annee_etudes = AnneeEtude::all();
        $annee_academiques = AnneeAcademique::all();

        return view('taux.create', compact('taux', 'pays', 'filieres', 'annee_etudes', 'annee_academiques'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TauxRequest $request): RedirectResponse
    {
        $all = $request->validated();
        Taux::create($all);

        return Redirect::route('tauxes.index')
            ->with('success', 'Taux a été créé(e) avec succes !');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $taux = Taux::findOrFail($id);

        return view('taux.show', compact('taux'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $taux = Taux::findOrFail($id);
        $pays = Pay::all();
        $filieres = Filiere::all();
        $annee_etudes = AnneeEtude::all();
        $annee_academiques = AnneeAcademique::all();

        return view('taux.edit', compact('taux', 'pays', 'filieres', 'annee_etudes', 'annee_academiques'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TauxRequest $request, Taux $taux): RedirectResponse
    {
        $all=$request->validated();
        $taux->update($all);

        return Redirect::route('tauxes.index')
            ->with('success', 'Taux a été mis(e) à jour avec succes !');
    }

    public function destroy($id): RedirectResponse
    {
        $data = Taux::findOrFail($id);

        try {
            $data->delete();
        } catch (\Throwable $th) {
            return redirect()->back()
                ->withErrors(["Une erreur s'est produite lors de la suppression du Taux !" . $th->getMessage()]);
        }


        return Redirect::route('tauxes.index')
            ->with('success', 'Taux a été supprimé(e) avec succes !');
    }
}
