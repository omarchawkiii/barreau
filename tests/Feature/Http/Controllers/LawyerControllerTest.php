<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Lawyer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Carbon;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\LawyerController
 */
final class LawyerControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $lawyers = Lawyer::factory()->count(3)->create();

        $response = $this->get(route('lawyers.index'));

        $response->assertOk();
        $response->assertViewIs('lawyers.index');
        $response->assertViewHas('locations');
    }


    #[Test]
    public function show_displays_view(): void
    {
        $lawyer = Lawyer::factory()->create();

        $response = $this->get(route('lawyers.show', $lawyer));

        $response->assertOk();
        $response->assertViewIs('lawyers.show');
        $response->assertViewHas('layer');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\LawyerController::class,
            'store',
            \App\Http\Requests\LawyerControllerStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $code = $this->faker->word();
        $nom_arb = $this->faker->word();
        $prenom_arb = $this->faker->word();
        $date_naiss = Carbon::parse($this->faker->date());
        $nom_fr = $this->faker->word();
        $prenom_fr = $this->faker->word();
        $etat = $this->faker->word();

        $response = $this->post(route('lawyers.store'), [
            'code' => $code,
            'nom_arb' => $nom_arb,
            'prenom_arb' => $prenom_arb,
            'date_naiss' => $date_naiss,
            'nom_fr' => $nom_fr,
            'prenom_fr' => $prenom_fr,
            'etat' => $etat,
        ]);

        $lawyers = Lawyer::query()
            ->where('code', $code)
            ->where('nom_arb', $nom_arb)
            ->where('prenom_arb', $prenom_arb)
            ->where('date_naiss', $date_naiss)
            ->where('nom_fr', $nom_fr)
            ->where('prenom_fr', $prenom_fr)
            ->where('etat', $etat)
            ->get();
        $this->assertCount(1, $lawyers);
        $lawyer = $lawyers->first();

        $response->assertRedirect(route('lawyers.index', [$layers]));
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\LawyerController::class,
            'update',
            \App\Http\Requests\LawyerControllerUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $lawyer = Lawyer::factory()->create();
        $code = $this->faker->word();
        $nom_arb = $this->faker->word();
        $prenom_arb = $this->faker->word();
        $date_naiss = Carbon::parse($this->faker->date());
        $nom_fr = $this->faker->word();
        $prenom_fr = $this->faker->word();
        $etat = $this->faker->word();

        $response = $this->put(route('lawyers.update', $lawyer), [
            'code' => $code,
            'nom_arb' => $nom_arb,
            'prenom_arb' => $prenom_arb,
            'date_naiss' => $date_naiss,
            'nom_fr' => $nom_fr,
            'prenom_fr' => $prenom_fr,
            'etat' => $etat,
        ]);

        $response->assertRedirect(route('lawyers.index', [$layers]));
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $lawyer = Lawyer::factory()->create();

        $response = $this->delete(route('lawyers.destroy', $lawyer));

        $response->assertRedirect(route('lawyers.index', [$layers]));

        $this->assertModelMissing($lawyer);
    }
}
