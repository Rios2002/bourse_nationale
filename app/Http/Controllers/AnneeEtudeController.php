<?php

namespace App\Http\Controllers;

use App\Models\AnneeEtude;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AnneeEtudeRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AnneeEtudeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $anneeEtudes = AnneeEtude::paginate();

        return view('annee-etude.index', compact('anneeEtudes'))
            ->with('i', ($request->input('page', 1) - 1) * $anneeEtudes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $anneeEtude = new AnneeEtude();

        return view('annee-etude.create', compact('anneeEtude'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AnneeEtudeRequest $request): RedirectResponse
    {
        $all = $request->validated();
        AnneeEtude::create($all);

        return Redirect::route('annee-etudes.index')
            ->with('success', 'AnneeEtude a été créé(e) avec succes !');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $anneeEtude = AnneeEtude::findOrFail($id);

        return view('annee-etude.show', compact('anneeEtude'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $anneeEtude = AnneeEtude::findOrFail($id);

        return view('annee-etude.edit', compact('anneeEtude'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AnneeEtudeRequest $request, AnneeEtude $anneeEtude): RedirectResponse
    {
        $all=$request->validated();
        $anneeEtude->update($all);

        return Redirect::route('annee-etudes.index')
            ->with('success', 'AnneeEtude a été mis(e) à jour avec succes !');
    }

    public function destroy($id): RedirectResponse
    {
        $data = AnneeEtude::findOrFail($id);

        try {
            $data->delete();
        } catch (\Throwable $th) {
            return redirect()->back()
                ->withErrors(["Une erreur s'est produite lors de la suppression du AnneeEtude !" . $th->getMessage()]);
        }


        return Redirect::route('annee-etudes.index')
            ->with('success', 'AnneeEtude a été supprimé(e) avec succes !');
    }
}
