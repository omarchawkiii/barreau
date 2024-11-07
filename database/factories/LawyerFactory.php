<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Lawyer;
use App\Models\User;

class LawyerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lawyer::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'nom_arb' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'prenom_arb' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'date_naiss' => $this->faker->date(),
            'nom_fr' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'prenom_fr' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'etat' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'date_serment' => $this->faker->date(),
            'lieu_serm' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'grade' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'tribunal' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'adresse_prof_arb' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'commune' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'willaya' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'adresse_fr' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'fin_contrat_local' => $this->faker->date(),
            'date_expir_carte' => $this->faker->date(),
            'local' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'adresse_domic' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'majles' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'fonction' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'sexe' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'depot' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'mutation' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'date_capa' => $this->faker->date(),
            'ex_proff' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'scotab' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'sit_prof' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'date_reglement' => $this->faker->date(),
            'datcosup' => $this->faker->date(),
            'lieu_nais_arb' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'lieu_nais_fr' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'willaya_nais_fr' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'fin_carte_prof' => $this->faker->date(),
            'tel' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'fax' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'mob' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'email' => $this->faker->safeEmail(),
            'num_act_nais' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'nom_pere' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'nom_mere' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'user_id' => User::factory(),
        ];
    }
}
