<?php

namespace App\Http\Requests\Demandes;

use Illuminate\Foundation\Http\FormRequest;

class ModifierDemandeRequest extends FormRequest
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
            'type_agrement_id'  => 'required',
            // 'titre_ficher'  => 'required',
            // 'ficher'  => 'required',
            'titre_fichers'   => 'required|array',
            'titre_fichers.*' => 'required|string|max:255',
            'fichers'   => 'required|array',
            'fichers.*' => 'required|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:5120',  // max size in KB (5MB = 5120KB)
        ];
    }

    public function attributes()
    {
        return [
            'type_agrement_id' => 'Type agrement',
            'titre_fichers' => 'Titre ficher',
            'titre_fichers.required'     => 'Vous devez fournir un titre pour chaque fichier.',
            'titre_fichers.*.required'   => 'Chaque fichier doit avoir un titre.',
            'fichers.required'           => 'Vous devez télécharger un fichier pour chaque titre.',
            'fichers.*.required'         => 'Chaque fichier est obligatoire.',
            'fichers.*.mimes'            => 'Chaque fichier doit être un type de fichier valide (jpg, jpeg, png, pdf, doc, docx).',
            'fichers.*.max'              => 'Chaque fichier ne doit pas dépasser 2 Mo.',
        ];
    }
}
