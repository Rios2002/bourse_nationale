<?php

namespace App\Http\Controllers;

use App\Models\Eligible;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\DemandeBillet;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\DemandeBilletRequest;

class DemandeBilletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $demandeBillets = DemandeBillet::paginate();

        return view('demande-billet.index', compact('demandeBillets'))
            ->with('i', ($request->input('page', 1) - 1) * $demandeBillets->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $demandeBillet = new DemandeBillet();
        $eligibles = Eligible::all();

        return view('demande-billet.create', compact('demandeBillet', 'eligibles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DemandeBilletRequest $request): RedirectResponse
    {
        $all = $request->validated();
        DemandeBillet::create($all);

        return Redirect::route('demande-billets.index')
            ->with('success', 'DemandeBillet a été créé(e) avec succes !');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $demandeBillet = DemandeBillet::findOrFail($id);

        return view('demande-billet.show', compact('demandeBillet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $demandeBillet = DemandeBillet::findOrFail($id);
        $eligibles = Eligible::all();

        return view('demande-billet.edit', compact('demandeBillet', 'eligibles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DemandeBilletRequest $request, DemandeBillet $demandeBillet): RedirectResponse
    {
        $all=$request->validated();
        $demandeBillet->update($all);

        return Redirect::route('demande-billets.index')
            ->with('success', 'DemandeBillet a été mis(e) à jour avec succes !');
    }

    public function destroy($id): RedirectResponse
    {
        $data = DemandeBillet::findOrFail($id);

        try {
            $data->delete();
        } catch (\Throwable $th) {
            return redirect()->back()
                ->withErrors(["Une erreur s'est produite lors de la suppression du DemandeBillet !" . $th->getMessage()]);
        }


        return Redirect::route('demande-billets.index')
            ->with('success', 'DemandeBillet a été supprimé(e) avec succes !');
    }
}
