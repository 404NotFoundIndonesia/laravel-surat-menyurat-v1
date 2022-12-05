<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Disposition>
 */
class DispositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'to' => $this->faker->name(),
            'due_date' => $this->faker->date(),
            'content' => $this->faker->sentence(10),
            'note' => $this->faker->sentence(3),
            'letter_status' => $this->faker->numberBetween(1,3),
            'letter_id' => $this->faker->numberBetween(1, 50),
            'user_id' => 1,
        ];
    }
}
