<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DemandePaiementRequest extends FormRequest
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
			'CodeBanque' => 'required|string',
			'CodeGuichet' => 'required|string',
			'NumCompte' => 'required|string',
			'CleRIB' => 'required|string',
			'IBAN' => 'required|string',
			'CodeSwift' => 'required|string',
			'Adresse' => 'required|string',
			'statut' => 'required|string',
			'user_id' => '',
        ];
    }
}
