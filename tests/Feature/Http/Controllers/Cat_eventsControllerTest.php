<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\CatEvent;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Cat_eventsController
 */
final class Cat_eventsControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function index_behaves_as_expected(): void
    {
        $catEvents = Cat_events::factory()->count(3)->create();

        $response = $this->get(route('cat_events.index'));
    }
}
