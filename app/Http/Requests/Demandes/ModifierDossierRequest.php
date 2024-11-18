<?php

namespace App\Http\Requests\Demandes;

use Illuminate\Foundation\Http\FormRequest;

class ModifierDossierRequest extends FormRequest
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
            'demande_serv_agrement_id' => 'required|exists:demande_serv_agrements,id',
            'titre_ficher'             => 'required|string|max:255',
            'ficher'                   => 'required|required|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:5120',
        ];
    }
}
