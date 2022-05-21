<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
 * Define the model's default state.
 *
 * @return array
 */
    public function definition()
    {
        return [
            'category' => $this->faker->title,
            'name' => $this->faker->name,
            'EC' => $this->faker->numberBetween(1, 10),
        ];
    }
}
