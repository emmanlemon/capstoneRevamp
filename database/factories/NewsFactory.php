<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'shortDescription' => $this->faker->word(),
            'fullDescription' => $this->faker->sentence(2),
            'header' => $this->faker->word(),
            'thumbnailImage' => $this->faker->word(),
            'fullImage' => $this->faker->word(),
        ];
    }
}
