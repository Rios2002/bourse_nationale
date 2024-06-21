<?php

namespace App\Http\Controllers;

use App\Models\Eligible;
use App\Models\Verification_boursier;
use Illuminate\Http\Request;

class VerificationBoursierController extends Controller
{
    function index()  {
        return view('verification-boursier.home');
    }

    public function store(Request $request)
    {
        request()->validate([
            "NumeroDeTable" => ["required", "min:2", "max:255", "unique:verification_boursiers,NumeroDeTable"],
            "DateNaissance" => ["required"],
            "AnneeObtention"=> ["required","min:2", "max:255"],
            ]);

            $e= Eligible::where("Num_table",$request->NumeroDeTable )
            ->where('DateNaissance', $request->DateNaissance)
            ->where('CodeAnneeAcademique', $request->AnneeObtention)
            ->whereNull("user_id")
            ;
            // dd($request->NumeroDeTable,
            // $request->DateNaissance,
            // $request->AnneeObtention);
            if($e->exists()){
                // donner access et regiriger 
                auth()->user()->assignRole("Boursier");
                $e= $e->first();
                $e->update(
                    [
                        "user_id" => auth()->user()->id
                    ]
                );
                // $e->save();
                // dd($e->toArray());

                
                return redirect("/");
            }else{
                return redirect()->back() ->with("error", "Les informations saisies ne correspondent à aucun boursier éligible");
            }
           
           
            return redirect()->route("home")->with('message','Vérification effectuée avec succès');
    }
}
