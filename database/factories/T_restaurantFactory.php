<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class T_restaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           
            'pro_name' => $this->faker->name(),
            'image' => '' .rand(1,3).'.jpg',
            'description' => $this->faker->name(),
            'price' => ''.rand(1,7).'0000',
            'categories_id'=> ''.rand(1,3),
        ];
    }
}
