<?php

namespace Database\Factories;

use App\Models\CatEvent;
use Illuminate\Database\Eloquent\Factories\Factory;

class CatEventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CatEvent::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'slug' => $this->faker->slug(),
        ];
    }
}
