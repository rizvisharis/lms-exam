<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $start_date = fake()->dateTimeBetween('-5 days');

        return [
            'name' => fake()->randomElement(['Maths', 'Science', 'Physics', 'Arab', 'History', 'English']),
            'exam_availability' => fake()->boolean,
            'exam_start' => $start_date,
            'exam_end' => Carbon::create($start_date)->addWeek()->toDateTime(),
        ];
    }
}
