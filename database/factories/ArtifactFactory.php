<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artifact>
 */
class ArtifactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'tags' => 'Region,District',
            'description' => $this->faker->paragraph(2),
            'price' => $this->faker->numerify('#####'),
            'details' => $this->faker->paragraph(10),
            'datetime' => $this->faker->date(),
        ];
    }
}