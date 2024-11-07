<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CatNews;
use App\Models\News;
use App\Models\User;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->paragraphs(3, true),
            'attachments' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'thumbnail' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'user_id' => User::factory(),
            'cat_news_id' => CatNews::factory(),
        ];
    }
}
