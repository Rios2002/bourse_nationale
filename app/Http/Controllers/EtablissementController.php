<?php

namespace App\Http\Controllers;

use App\Models\Etablissement;
use App\Models\Universite;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\EtablissementRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EtablissementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $etablissements = Etablissement::paginate();

        return view('etablissement.index', compact('etablissements'))
            ->with('i', ($request->input('page', 1) - 1) * $etablissements->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $etablissement = new Etablissement();
        $universites = Universite::all();

        return view('etablissement.create', compact('etablissement', 'universites'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EtablissementRequest $request): RedirectResponse
    {
        $all = $request->validated();
        Etablissement::create($all);

        return Redirect::route('etablissements.index')
            ->with('success', 'Etablissement a été créé(e) avec succes !');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $etablissement = Etablissement::findOrFail($id);

        return view('etablissement.show', compact('etablissement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $etablissement = Etablissement::findOrFail($id);
        $universites = Universite::all();

        return view('etablissement.edit', compact('etablissement', 'universites'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EtablissementRequest $request, Etablissement $etablissement): RedirectResponse
    {
        $all=$request->validated();
        $etablissement->update($all);

        return Redirect::route('etablissements.index')
            ->with('success', 'Etablissement a été mis(e) à jour avec succes !');
    }

    public function destroy($id): RedirectResponse
    {
        $data = Etablissement::findOrFail($id);

        try {
            $data->delete();
        } catch (\Throwable $th) {
            return redirect()->back()
                ->withErrors(["Une erreur s'est produite lors de la suppression du Etablissement !" . $th->getMessage()]);
        }


        return Redirect::route('etablissements.index')
            ->with('success', 'Etablissement a été supprimé(e) avec succes !');
    }
}
