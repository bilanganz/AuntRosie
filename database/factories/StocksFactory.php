<?php

namespace Database\Factories;

use App\Models\Stocks;
use Illuminate\Database\Eloquent\Factories\Factory;

class StocksFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Stocks::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ingredients_id' => $this->faker->numberBetween(1, 10),
            'quantity' => $this->faker->numberBetween(1, 25),
        ];
    }
}
