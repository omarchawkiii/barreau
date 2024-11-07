<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\CatNews;
use App\Models\Cat_news;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Cat_newsController
 */
final class Cat_newsControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $catNews = Cat_news::factory()->count(3)->create();

        $response = $this->get(route('cat_news.index'));

        $response->assertOk();
        $response->assertViewIs('cat_newses.index');
        $response->assertViewHas('cat_newses');
    }


    #[Test]
    public function show_displays_view(): void
    {
        $catNews = Cat_news::factory()->create();

        $response = $this->get(route('cat_news.show', $catNews));

        $response->assertOk();
        $response->assertViewIs('cat_newses.index');
        $response->assertViewHas('cat_newses');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\Cat_newsController::class,
            'store',
            \App\Http\Requests\Cat_newsControllerStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $response = $this->post(route('cat_news.store'));

        $response->assertRedirect(route('cat_newses.index', [$cat_newses]));

        $this->assertDatabaseHas(catNews, [ /* ... */ ]);
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\Cat_newsController::class,
            'update',
            \App\Http\Requests\Cat_newsControllerUpdateRequest::class
        );
    }

    #[Test]
    public function update_saves_and_redirects(): void
    {
        $catNews = Cat_news::factory()->create();

        $response = $this->put(route('cat_news.update', $catNews));

        $response->assertRedirect(route('cat_newses.index', [$cat_newses]));

        $this->assertDatabaseHas(catNews, [ /* ... */ ]);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $catNews = Cat_news::factory()->create();
        $catNews = CatNews::factory()->create();

        $response = $this->delete(route('cat_news.destroy', $catNews));

        $response->assertRedirect(route('cat_newses.index', [$cat_newses]));

        $this->assertModelMissing($catNews);
    }
}
