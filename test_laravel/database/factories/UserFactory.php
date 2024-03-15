<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "id"=>$this->faker->uuid,
            "name"=> $this->faker->name,
        ];
    }
}
