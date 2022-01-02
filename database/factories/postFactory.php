<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class postFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, 10),
            'name' => $this->faker->sentence(5),
            'slug' => $this->faker->sentence(5),
            'view' => rand(1, 100),

        ];
    }
}
