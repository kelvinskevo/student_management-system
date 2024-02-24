<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    private static $studentIdCounter = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $year = date('Y');
        $studentId = "KLS{$year}" . str_pad(self::$studentIdCounter, 3, '0', STR_PAD_LEFT);
        self::$studentIdCounter++;

        return [
            'name' => $this->faker->name(),
            'student_id' => $studentId,
            'address_1' => $this->faker->streetAddress(),
            'address_2' => $this->faker->secondaryAddress(),

        ];
    }
}
