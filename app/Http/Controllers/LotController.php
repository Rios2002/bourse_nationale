<?php

namespace App\Http\Controllers;

use App\Models\Pv;
use App\Models\Lot;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\LotRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class LotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $lots = Lot::paginate();

        return view('lot.index', compact('lots'))
            ->with('i', ($request->input('page', 1) - 1) * $lots->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $lot = new Lot();
        $pvs = Pv::all();

        return view('lot.create', compact('lot', 'pvs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LotRequest $request): RedirectResponse
    {
        $all = $request->validated();
        Lot::create($all);

        return Redirect::route('lots.index')
            ->with('success', 'Lot a été créé(e) avec succes !');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $lot = Lot::findOrFail($id);

        return view('lot.show', compact('lot'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $lot = Lot::findOrFail($id);
        $pvs = Pv::all();

        return view('lot.edit', compact('lot', 'pvs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LotRequest $request, Lot $lot): RedirectResponse
    {
        $all=$request->validated();
        $lot->update($all);

        return Redirect::route('lots.index')
            ->with('success', 'Lot a été mis(e) à jour avec succes !');
    }

    public function destroy($id): RedirectResponse
    {
        $data = Lot::findOrFail($id);

        try {
            $data->delete();
        } catch (\Throwable $th) {
            return redirect()->back()
                ->withErrors(["Une erreur s'est produite lors de la suppression du Lot !" . $th->getMessage()]);
        }


        return Redirect::route('lots.index')
            ->with('success', 'Lot a été supprimé(e) avec succes !');
    }
}
