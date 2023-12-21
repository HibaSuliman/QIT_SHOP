<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'name'=>$this->faker->text(20),
            'description'=>$this->faker->text(500),
            'price'=>rand(1000,9999),
            'image'=>'digital_'.$this->faker->numberBetween(1,22).'.jpg',
            'category_id'=>rand(1,10),
        ];
    }
}
