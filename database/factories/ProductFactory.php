<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'slug' => $this->faker->slug(),
            'details' => $this->faker->sentence(),
            'rate' => $this->faker->randomFloat(1, 20, 30),
            'stock' => $this->faker->randomDigit(),
        ];
    }
}
