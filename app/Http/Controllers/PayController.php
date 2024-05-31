<?php

namespace App\Http\Controllers;

use App\Models\Pay;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PayRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $pays = Pay::paginate();

        return view('pay.index', compact('pays'))
            ->with('i', ($request->input('page', 1) - 1) * $pays->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $pay = new Pay();

        return view('pay.create', compact('pay'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PayRequest $request): RedirectResponse
    {
        $all = $request->validated();
        Pay::create($all);

        return Redirect::route('pays.index')
            ->with('success', 'Pay a été créé(e) avec succes !');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $pay = Pay::findOrFail($id);

        return view('pay.show', compact('pay'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $pay = Pay::findOrFail($id);

        return view('pay.edit', compact('pay'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PayRequest $request, Pay $pay): RedirectResponse
    {
        $all=$request->validated();
        $pay->update($all);

        return Redirect::route('pays.index')
            ->with('success', 'Pay a été mis(e) à jour avec succes !');
    }

    public function destroy($id): RedirectResponse
    {
        $data = Pay::findOrFail($id);

        try {
            $data->delete();
        } catch (\Throwable $th) {
            return redirect()->back()
                ->withErrors(["Une erreur s'est produite lors de la suppression du Pay !" . $th->getMessage()]);
        }


        return Redirect::route('pays.index')
            ->with('success', 'Pay a été supprimé(e) avec succes !');
    }
}
