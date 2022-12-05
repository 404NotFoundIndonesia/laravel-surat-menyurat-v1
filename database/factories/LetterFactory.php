<?php

namespace Database\Factories;

use App\Enums\LetterType;
use App\Models\Letter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Letter>
 */
class LetterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reference_number' => $this->faker->ean13(),
            'agenda_number' => $this->faker->randomNumber(5),
            'from' => $this->faker->name('male'),
            'to' => $this->faker->name('female'),
            'letter_date' => $this->faker->date(),
            'received_date'=> $this->faker->date(),
            'description' => $this->faker->sentence(7),
            'note' => $this->faker->sentence(3),
            'type' => $this->faker->randomElement([LetterType::INCOMING->type(), LetterType::OUTGOING->type()]),
            'classification_code' => 'ADM',
            'user_id' => 1,
        ];
    }
}
