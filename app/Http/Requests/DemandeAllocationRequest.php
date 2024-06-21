<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DemandeAllocationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'CodeDemandeAllocation' => 'required|string',
			'type' => 'required|string',
			'statut' => 'required|string',
			'CodePays' => 'required',
			'CodeFiliere' => 'required',
			'CodeAnneeAcademique' => 'required',
			'CodeAnneeEtude' => 'required',
			'CodeDiplome' => 'required',
        ];
    }
}
