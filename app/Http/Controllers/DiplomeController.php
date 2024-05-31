<?php

namespace App\Http\Controllers;

use App\Models\Diplome;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DiplomeRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DiplomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $diplomes = Diplome::paginate();

        return view('diplome.index', compact('diplomes'))
            ->with('i', ($request->input('page', 1) - 1) * $diplomes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $diplome = new Diplome();

        return view('diplome.create', compact('diplome'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DiplomeRequest $request): RedirectResponse
    {
        $all = $request->validated();
        Diplome::create($all);

        return Redirect::route('diplomes.index')
            ->with('success', 'Diplome a été créé(e) avec succes !');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $diplome = Diplome::findOrFail($id);

        return view('diplome.show', compact('diplome'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $diplome = Diplome::findOrFail($id);

        return view('diplome.edit', compact('diplome'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DiplomeRequest $request, Diplome $diplome): RedirectResponse
    {
        $all=$request->validated();
        $diplome->update($all);

        return Redirect::route('diplomes.index')
            ->with('success', 'Diplome a été mis(e) à jour avec succes !');
    }

    public function destroy($id): RedirectResponse
    {
        $data = Diplome::findOrFail($id);

        try {
            $data->delete();
        } catch (\Throwable $th) {
            return redirect()->back()
                ->withErrors(["Une erreur s'est produite lors de la suppression du Diplome !" . $th->getMessage()]);
        }


        return Redirect::route('diplomes.index')
            ->with('success', 'Diplome a été supprimé(e) avec succes !');
    }
}
