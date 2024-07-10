<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fee>
 */
class FeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'description' => $this->faker->paragraphs(3, true),
            'price' => random_int(1000, 50000),
            'worked_at'=> $this->faker->dateTimeThisMonth(),
        ];
    }
}
