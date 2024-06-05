<?php

namespace App\Http\Controllers;

use App\Models\Eligible;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\AnneeAcademique;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\EligibleRequest;
use Illuminate\Support\Facades\Redirect;

class EligibleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $eligibles = Eligible::paginate();

        return view('eligible.index', compact('eligibles'))
            ->with('i', ($request->input('page', 1) - 1) * $eligibles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $eligible = new Eligible();
        $annee_academiques = AnneeAcademique::all();

        return view('eligible.create', compact('eligible', 'annee_academiques'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EligibleRequest $request): RedirectResponse
    {
        $all = $request->validated();
        Eligible::create($all);

        return Redirect::route('eligibles.index')
            ->with('success', 'Eligible a été créé(e) avec succes !');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $eligible = Eligible::findOrFail($id);

        return view('eligible.show', compact('eligible'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $eligible = Eligible::findOrFail($id);
        $annee_academiques = AnneeAcademique::all();

        return view('eligible.edit', compact('eligible', 'annee_academiques'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EligibleRequest $request, Eligible $eligible): RedirectResponse
    {
        $all=$request->validated();
        $eligible->update($all);

        return Redirect::route('eligibles.index')
            ->with('success', 'Eligible a été mis(e) à jour avec succes !');
    }

    public function destroy($id): RedirectResponse
    {
        $data = Eligible::findOrFail($id);

        try {
            $data->delete();
        } catch (\Throwable $th) {
            return redirect()->back()
                ->withErrors(["Une erreur s'est produite lors de la suppression du Eligible !" . $th->getMessage()]);
        }


        return Redirect::route('eligibles.index')
            ->with('success', 'Eligible a été supprimé(e) avec succes !');
    }
}
