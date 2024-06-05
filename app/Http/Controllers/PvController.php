<?php

namespace App\Http\Controllers;

use App\Models\Pv;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PvRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $pvs = Pv::paginate();

        return view('pv.index', compact('pvs'))
            ->with('i', ($request->input('page', 1) - 1) * $pvs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $pv = new Pv();

        return view('pv.create', compact('pv'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PvRequest $request): RedirectResponse
    {
        $all = $request->validated();
        Pv::create($all);

        return Redirect::route('pvs.index')
            ->with('success', 'Pv a été créé(e) avec succes !');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $pv = Pv::findOrFail($id);

        return view('pv.show', compact('pv'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $pv = Pv::findOrFail($id);

        return view('pv.edit', compact('pv'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PvRequest $request, Pv $pv): RedirectResponse
    {
        $all=$request->validated();
        $pv->update($all);

        return Redirect::route('pvs.index')
            ->with('success', 'Pv a été mis(e) à jour avec succes !');
    }

    public function destroy($id): RedirectResponse
    {
        $data = Pv::findOrFail($id);

        try {
            $data->delete();
        } catch (\Throwable $th) {
            return redirect()->back()
                ->withErrors(["Une erreur s'est produite lors de la suppression du Pv !" . $th->getMessage()]);
        }


        return Redirect::route('pvs.index')
            ->with('success', 'Pv a été supprimé(e) avec succes !');
    }
}
