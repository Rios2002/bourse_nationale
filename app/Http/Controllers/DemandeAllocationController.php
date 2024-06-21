<?php

namespace App\Http\Controllers;

use App\Models\Eligible;
use Illuminate\View\View;
use App\Models\AnneeEtude;
use Illuminate\Http\Request;
use App\Models\AnneeAcademique;
use App\Models\DemandeAllocation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\DemandeAllocationRequest;
use App\Models\Diplome;
use App\Models\Filiere;
use App\Models\Pay;

class DemandeAllocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $demandeAllocations = DemandeAllocation::paginate();

        return view('demande-allocation.index', compact('demandeAllocations'))
            ->with('i', ($request->input('page', 1) - 1) * $demandeAllocations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $demandeAllocation = new DemandeAllocation();
        $eligibles = Eligible::all();
        $annee_etudes = AnneeEtude::all();
        $annee_academiques = AnneeAcademique::all();
        $diplomes = Diplome::all();
        $filieres = Filiere::all();
        $pays = Pay::all();

        return view('demande-allocation.create', compact('demandeAllocation', 'eligibles', 'annee_etudes', 'annee_academiques', 'diplomes', 'filieres', 'pays'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DemandeAllocationRequest $request): RedirectResponse
    {
        $all = $request->validated();
        DemandeAllocation::create($all);

        return Redirect::route('demande-allocations.index')
            ->with('success', 'DemandeAllocation a été créé(e) avec succes !');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $demandeAllocation = DemandeAllocation::findOrFail($id);

        return view('demande-allocation.show', compact('demandeAllocation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $demandeAllocation = DemandeAllocation::findOrFail($id);
        $eligibles = Eligible::all();
        $annee_etudes = AnneeEtude::all();
        $annee_academiques = AnneeAcademique::all();
        $diplomes = Diplome::all();
        $filieres = Filiere::all();
        $pays = Pay::all();

        return view('demande-allocation.edit', compact('demandeAllocation', 'eligibles', 'annee_etudes', 'annee_academiques', 'diplomes', 'filieres', 'pays'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DemandeAllocationRequest $request, DemandeAllocation $demandeAllocation): RedirectResponse
    {
        $all=$request->validated();
        $demandeAllocation->update($all);

        return Redirect::route('demande-allocations.index')
            ->with('success', 'DemandeAllocation a été mis(e) à jour avec succes !');
    }

    public function destroy($id): RedirectResponse
    {
        $data = DemandeAllocation::findOrFail($id);

        try {
            $data->delete();
        } catch (\Throwable $th) {
            return redirect()->back()
                ->withErrors(["Une erreur s'est produite lors de la suppression du DemandeAllocation !" . $th->getMessage()]);
        }


        return Redirect::route('demande-allocations.index')
            ->with('success', 'DemandeAllocation a été supprimé(e) avec succes !');
    }
}
