<?php

namespace App\Http\Controllers;

use App\Models\Universite;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\UniversiteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class UniversiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $universites = Universite::paginate();

        return view('universite.index', compact('universites'))
            ->with('i', ($request->input('page', 1) - 1) * $universites->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $universite = new Universite();

        return view('universite.create', compact('universite'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UniversiteRequest $request): RedirectResponse
    {
        $all = $request->validated();
        Universite::create($all);

        return Redirect::route('universites.index')
            ->with('success', 'Universite a été créé(e) avec succes !');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $universite = Universite::findOrFail($id);

        return view('universite.show', compact('universite'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $universite = Universite::findOrFail($id);

        return view('universite.edit', compact('universite'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UniversiteRequest $request, Universite $universite): RedirectResponse
    {
        $all=$request->validated();
        $universite->update($all);

        return Redirect::route('universites.index')
            ->with('success', 'Universite a été mis(e) à jour avec succes !');
    }

    public function destroy($id): RedirectResponse
    {
        $data = Universite::findOrFail($id);

        try {
            $data->delete();
        } catch (\Throwable $th) {
            return redirect()->back()
                ->withErrors(["Une erreur s'est produite lors de la suppression du Universite !" . $th->getMessage()]);
        }


        return Redirect::route('universites.index')
            ->with('success', 'Universite a été supprimé(e) avec succes !');
    }
}
