<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EligibleRequest extends FormRequest
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
			'Num_table' => 'required',
			'CodeAnneeAcademique' => 'required',
			'Nom' => 'required|string',
			'Prenoms' => 'required|string',
			'Numero' => 'required',
			'Sexe' => 'required',
			'Serie' => 'required|string',
			'LieuNaissance' => 'required|string',
			'Moyenne' => 'required',
			'Mention' => 'required|string',
			'DateNaissance' => 'required',
        ];
    }
}
