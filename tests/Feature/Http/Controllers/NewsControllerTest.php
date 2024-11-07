<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\News;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\NewsController
 */
final class NewsControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $news = News::factory()->count(3)->create();

        $response = $this->get(route('news.index'));

        $response->assertOk();
        $response->assertViewIs('newses.index');
        $response->assertViewHas('newses');
    }


    #[Test]
    public function show_displays_view(): void
    {
        $news = News::factory()->create();

        $response = $this->get(route('news.show', $news));

        $response->assertOk();
        $response->assertViewIs('newses.show');
        $response->assertViewHas('news');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\NewsController::class,
            'store',
            \App\Http\Requests\NewsControllerStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $title = $this->faker->sentence(4);
        $slug = $this->faker->slug();
        $content = $this->faker->paragraphs(3, true);

        $response = $this->post(route('news.store'), [
            'title' => $title,
            'slug' => $slug,
            'content' => $content,
        ]);

        $news = News::query()
            ->where('title', $title)
            ->where('slug', $slug)
            ->where('content', $content)
            ->get();
        $this->assertCount(1, $news);
        $news = $news->first();

        $response->assertRedirect(route('newses.index', [$newses]));
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\NewsController::class,
            'update',
            \App\Http\Requests\NewsControllerUpdateRequest::class
        );
    }

    #[Test]
    public function update_saves_and_redirects(): void
    {
        $news = News::factory()->create();
        $title = $this->faker->sentence(4);
        $slug = $this->faker->slug();
        $content = $this->faker->paragraphs(3, true);

        $response = $this->put(route('news.update', $news), [
            'title' => $title,
            'slug' => $slug,
            'content' => $content,
        ]);

        $news = News::query()
            ->where('title', $title)
            ->where('slug', $slug)
            ->where('content', $content)
            ->get();
        $this->assertCount(1, $news);
        $news = $news->first();

        $response->assertRedirect(route('newses.index', [$newses]));
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $news = News::factory()->create();

        $response = $this->delete(route('news.destroy', $news));

        $response->assertRedirect(route('newses.index', [$newses]));

        $this->assertModelMissing($news);
    }
}
