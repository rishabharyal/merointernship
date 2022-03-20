<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Institution>
 */
class InstitutionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type' => ["School", 'College', "University", "Training Center"][rand(0, 3)],
            'title' => $this->faker->company,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'description' => $this->faker->paragraph(3)
        ];
    }
}
