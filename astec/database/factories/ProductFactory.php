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
    public function definition()
    {
        return [
            'name' => fake()->regexify('[A-Z]{3}-[0-9]{4}'),
            'manufacturer' => fake()->randomElement(['Brother', 'Canon', 'Epson', 'Kyocera', 'Konica Minolta', 'Okidata']),
            'description' => fake()->sentence(),
            'image' => '___8c6e0dca58b658e3a9ce4280ee76a604.png'
        ];
    }
}
