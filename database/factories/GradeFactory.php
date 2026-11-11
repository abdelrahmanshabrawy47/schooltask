<?php

namespace Database\Factories;

use App\Models\grade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "stud_ID"=>$this->faker->numberBetween(1,15),
            "grade"=>$this->faker->randomElement(["A","B","C","D","F"])
        ];
    }
}
