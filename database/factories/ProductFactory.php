<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{

    public function definition() : array
    {
        return [
            'name' => $this->faker->name(),
            'image' => $this->faker->image(),
            'description' => $this->faker->description(),
            'price' => $this->faker->price(),
        ];
    }
}
