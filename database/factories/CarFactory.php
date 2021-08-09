<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    protected $cars = ['Gol','Corsa','Palio','Etios','Civic','Corolla','City','Jeep Renegade','Ferrari Itália','Corvette'];

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand_id' => $this->faker->numberBetween(1,Brand::count()),
            'model' => $this->faker->unique()->randomElement($this->cars),
            'color' => $this->faker->colorName
        ];
    }
}
