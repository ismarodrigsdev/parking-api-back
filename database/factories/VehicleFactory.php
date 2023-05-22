<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = FakerFactory::create();

        return [
            'plate_number' => strtoupper($faker->randomLetter()) . $faker->numberBetween(100, 999)
        ];
    }
}
