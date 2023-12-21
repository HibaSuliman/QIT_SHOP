<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Suppport\str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
      
        return [
            'name' => $this->faker->text(20),
            'image'=>'digital_'.$this->faker->numberBetween(1,22).'.jpg',
        ];
    }
}
