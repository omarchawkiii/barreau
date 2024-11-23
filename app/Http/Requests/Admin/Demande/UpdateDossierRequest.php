<?php

namespace App\Http\Requests\Admin\Demande;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDossierRequest extends FormRequest
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
            'titre_ficher' => 'required|string|max:255',
            'ficher'       => 'required|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:5120',
        ];
    }
}
