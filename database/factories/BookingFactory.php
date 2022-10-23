<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'touristname' => $this->faker->sentence(),
            'lname' => $this->faker->lastName(),
            'fname' => $this->faker->firstName(),
            'uname' => $this->faker->name(),
            'tprice' => $this->faker->numerify('#####'),
            'totnum' => $this->faker->numerify('#####'),
            'totprice' => $this->faker->numerify('#####'),
            'email' => $this->faker->email(),
            'description' => $this->faker->paragraph(1),
            'datetime' => $this->faker->date(),
        ];
    }
}
