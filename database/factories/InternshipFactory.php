<?php

namespace Database\Factories;

use App\Models\Organization;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Internship>
 */
class InternshipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle,
            'city' => $this->faker->city,
            'description' => $this->faker->paragraph(5),
            'qualifications' => $this->faker->paragraph(5),
            'is_published' => $this->faker->boolean,
            'is_featured' => $this->faker->boolean,
            'user_id' => User::inRandomOrder()->first()->id,
            'organization_id' => Organization::inRandomOrder()->first()->id
        ];
    }
}
