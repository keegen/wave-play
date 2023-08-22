<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cars;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cars>
 */
class CarsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
            'title' => fake()->sentence,
            'description' => fake()->sentence,
            'price' => fake()->randomDigit(),
            'year' => fake()->randomDigit(),
            'vehicle_type' => fake()->sentence,
            'brand' => fake()->sentence,
            'condition' => fake()->sentence
        ];
    }
}
