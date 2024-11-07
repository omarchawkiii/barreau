<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LawyerStoreRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'code' => ['required', 'string', 'max:255'],
            'nom_arb' => ['required', 'string', 'max:255'],
            'prenom_arb' => ['required', 'string', 'max:255'],
            'date_naiss' => ['required', 'date'],
            'nom_fr' => ['required', 'string', 'max:255'],
            'prenom_fr' => ['required', 'string', 'max:255'],
            'etat' => ['required', 'string', 'max:255'],
        ];
    }
}
