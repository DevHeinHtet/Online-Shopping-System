<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

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
    public function definition()
    {
        $condition = $this->faker->randomElement(['New', 'Used']);
        $type = $this->faker->randomElement(['Sell', 'Buy', 'Exchange']);
        $position = $this->faker->randomElement(['Staff', 'Supervisor']);
        return [
            'name' => $this->faker->name(),
            'category_id' => Category::factory(),
            'price' => $this->faker->numberBetween(100,20000),
            'description' => $this->faker->paragraph(10),
            'condition' => $condition,
            'type' =>  $type,
            'status' => $this->faker->numberBetween(0,1),
            'photo' => 'luffy.png',
            'owner_name' => $this->faker->name(),
            'phone_no' => $this->faker->numerify('##########'),
            'address' => $this->faker->address(),
        ];
    }
}
