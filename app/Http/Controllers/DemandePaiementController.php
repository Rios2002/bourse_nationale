<?php

namespace App\Http\Controllers;

use App\Models\Eligible;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\DemandePaiement;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\DemandePaiementRequest;

class DemandePaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $demandePaiements = DemandePaiement::paginate();

        return view('demande-paiement.index', compact('demandePaiements'))
            ->with('i', ($request->input('page', 1) - 1) * $demandePaiements->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $demandePaiement = new DemandePaiement();
        $eligibles = Eligible::all();

        return view('demande-paiement.create', compact('demandePaiement', 'eligibles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DemandePaiementRequest $request): RedirectResponse
    {
        $all = $request->validated();
        DemandePaiement::create($all);

        return Redirect::route('demande-paiements.index')
            ->with('success', 'DemandePaiement a été créé(e) avec succes !');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $demandePaiement = DemandePaiement::findOrFail($id);

        return view('demande-paiement.show', compact('demandePaiement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $demandePaiement = DemandePaiement::findOrFail($id);
        $eligibles = Eligible::all();

        return view('demande-paiement.edit', compact('demandePaiement', 'eligibles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DemandePaiementRequest $request, DemandePaiement $demandePaiement): RedirectResponse
    {
        $all=$request->validated();
        $demandePaiement->update($all);

        return Redirect::route('demande-paiements.index')
            ->with('success', 'DemandePaiement a été mis(e) à jour avec succes !');
    }

    public function destroy($id): RedirectResponse
    {
        $data = DemandePaiement::findOrFail($id);

        try {
            $data->delete();
        } catch (\Throwable $th) {
            return redirect()->back()
                ->withErrors(["Une erreur s'est produite lors de la suppression du DemandePaiement !" . $th->getMessage()]);
        }


        return Redirect::route('demande-paiements.index')
            ->with('success', 'DemandePaiement a été supprimé(e) avec succes !');
    }
}
