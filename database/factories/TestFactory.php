<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Test>
 */
class TestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->title(),
            'question' => fake()->text,
            'answer1' => fake()->sentence,
            'answer2' => fake()->sentence,
            'answer3' => fake()->sentence,
            'answer4' => fake()->sentence,
            'answer5' => fake()->sentence,
            'correct_answer' => fake()->sentence,
        ];
    }
}
