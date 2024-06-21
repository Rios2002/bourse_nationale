<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DemandeBilletRequest extends FormRequest
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
			'type' => 'required|string',
			'motif' => 'required|string',
			'ville_depart' => 'required|string',
			'ville_destination' => 'required|string',
			'date_depart' => 'required',
			'date_retour' => 'required',
			'Adresse' => 'required|string',
			'statut' => 'required|string',
        ];
    }
}
