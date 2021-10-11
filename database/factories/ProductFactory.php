<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            "sku" => $this->faker->words(1,true),
            "name" => $this->faker->words(2,true),
            "price" => $this->faker->numberBetween(),
            "tax_rate" => $this->faker->numberBetween(1,20),
            "taxed_price" => $this->faker->numberBetween(),
        ];
    }
}
