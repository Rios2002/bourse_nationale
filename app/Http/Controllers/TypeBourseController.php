<?php

namespace App\Http\Controllers;

use App\Models\TypeBourse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TypeBourseRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TypeBourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $typeBourses = TypeBourse::paginate();

        return view('type-bourse.index', compact('typeBourses'))
            ->with('i', ($request->input('page', 1) - 1) * $typeBourses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $typeBourse = new TypeBourse();

        return view('type-bourse.create', compact('typeBourse'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TypeBourseRequest $request): RedirectResponse
    {
        $all = $request->validated();
        TypeBourse::create($all);

        return Redirect::route('type-bourses.index')
            ->with('success', 'TypeBourse a été créé(e) avec succes !');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $typeBourse = TypeBourse::findOrFail($id);

        return view('type-bourse.show', compact('typeBourse'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $typeBourse = TypeBourse::findOrFail($id);

        return view('type-bourse.edit', compact('typeBourse'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TypeBourseRequest $request, TypeBourse $typeBourse): RedirectResponse
    {
        $all=$request->validated();
        $typeBourse->update($all);

        return Redirect::route('type-bourses.index')
            ->with('success', 'TypeBourse a été mis(e) à jour avec succes !');
    }

    public function destroy($id): RedirectResponse
    {
        $data = TypeBourse::findOrFail($id);

        try {
            $data->delete();
        } catch (\Throwable $th) {
            return redirect()->back()
                ->withErrors(["Une erreur s'est produite lors de la suppression du TypeBourse !" . $th->getMessage()]);
        }


        return Redirect::route('type-bourses.index')
            ->with('success', 'TypeBourse a été supprimé(e) avec succes !');
    }
}
