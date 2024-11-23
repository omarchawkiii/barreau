<?php

namespace App\Http\Requests\Demandes;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

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
            'titre_ficher'  => 'required|string|max:255',
            'ficher'        => 'required|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:5120',
        ];
    }

    // public function failedValidation(Validator $validator)
    // {
    //     throw new HttpResponseException(
    //         response()->json([
    //             'status' => false,
    //             'errors' => $validator->errors()
    //         ], 400)
    //     );
    // }

}
