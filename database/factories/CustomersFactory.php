<?php

namespace Database\Factories;

use App\Models\Customers;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'DOB' => $this->faker->dateTimeBetween('1990-01-01', '2012-12-31')->format('d/m/Y'), 
            'email' => $this->faker->email, 
            'phone_number' => $this->faker->phoneNumber, 
        ];
    }
}
