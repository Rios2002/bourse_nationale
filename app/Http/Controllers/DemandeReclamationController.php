<?php

namespace App\Http\Controllers;

use App\Models\DemandeReclamation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DemandeReclamationRequest;
use App\Models\Eligible;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DemandeReclamationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $demandeReclamations = DemandeReclamation::paginate();

        return view('demande-reclamation.index', compact('demandeReclamations'))
            ->with('i', ($request->input('page', 1) - 1) * $demandeReclamations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $demandeReclamation = new DemandeReclamation();
        $eligibles = Eligible::all();

        return view('demande-reclamation.create', compact('demandeReclamation', 'eligibles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DemandeReclamationRequest $request): RedirectResponse
    {
        $all = $request->validated();
        DemandeReclamation::create($all);

        return Redirect::route('demande-reclamations.index')
            ->with('success', 'DemandeReclamation a été créé(e) avec succes !');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $demandeReclamation = DemandeReclamation::findOrFail($id);

        return view('demande-reclamation.show', compact('demandeReclamation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $demandeReclamation = DemandeReclamation::findOrFail($id);
        $eligibles = Eligible::all();

        return view('demande-reclamation.edit', compact('demandeReclamation', 'eligibles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DemandeReclamationRequest $request, DemandeReclamation $demandeReclamation): RedirectResponse
    {
        $all=$request->validated();
        $demandeReclamation->update($all);

        return Redirect::route('demande-reclamations.index')
            ->with('success', 'DemandeReclamation a été mis(e) à jour avec succes !');
    }

    public function destroy($id): RedirectResponse
    {
        $data = DemandeReclamation::findOrFail($id);

        try {
            $data->delete();
        } catch (\Throwable $th) {
            return redirect()->back()
                ->withErrors(["Une erreur s'est produite lors de la suppression du DemandeReclamation !" . $th->getMessage()]);
        }


        return Redirect::route('demande-reclamations.index')
            ->with('success', 'DemandeReclamation a été supprimé(e) avec succes !');
    }
}
