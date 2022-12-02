<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'subject' => $this->faker->word(),
            'message' => $this->faker->sentence(2),
            'email' => $this->faker->unique()->safeEmail(),
            'recipient'=> $this->faker->words(rand(5, 10), true),
        ];
    }
}
