<?php

namespace App\Http\Requests;

use App\Models\Lawyer;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'date_serment' => ['required', 'date'],
            'lieu_serm' => ['required', 'string', 'max:255'],
            'grade' => ['required', 'string', 'max:255'],
            'tribunal' => ['required', 'string', 'max:255'],
            'adresse_prof_arb' => ['required', 'string', 'max:255'],
            'commune' => ['required', 'string', 'max:255'],
            'willaya' => ['required', 'string', 'max:255'],
            'adresse_fr' => ['required', 'string', 'max:255'],
            'fin_contrat_local' => ['required', 'date'],
            'date_expir_carte' => ['required', 'date'],
            'local' => ['required', 'string', 'max:255'],
            'adresse_domic' => ['required', 'string', 'max:255'],
            'majles' => ['required', 'string', 'max:255'],
            'fonction' => ['required', 'string', 'max:255'],
            'sexe' => ['required', 'string', Rule::in(Lawyer::GENDER)], 
            'depot' => ['required', 'string', 'max:255'],
            'mutation' => ['required', 'string', 'max:255'],
            'date_capa' => ['required', 'date'],
            'ex_proff' => ['required', 'string', 'max:255'],
            'scotab' => ['required', 'string', 'max:255'],
            'sit_prof' => ['required', 'string', 'max:255'],
            'date_reglement' => ['required', 'date'],
            'datcosup' => ['required', 'date'],
            'lieu_nais_arb' => ['required', 'string', 'max:255'],
            'lieu_nais_fr' => ['required', 'string', 'max:255'],
            'willaya_nais_fr' => ['required', 'string', 'max:255'],
            'fin_carte_prof' => ['required', 'date'],
            'tel' => ['required', 'string', 'max:20'], // Adjust max length as needed
            'fax' => ['required', 'string', 'max:20'], // Adjust max length as needed
            'mob' => ['required', 'string', 'max:20'], // Adjust max length as needed
            'email' => ['required', 'email', 'max:255'],
            'num_act_nais' => ['required', 'string', 'max:255'],
            'nom_pere' => ['required', 'string', 'max:255'],
            'nom_mere' => ['required', 'string', 'max:255'],
        ];
    }
}
