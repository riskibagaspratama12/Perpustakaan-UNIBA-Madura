<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'number' => fake()->unique()->numerify('########'),
            'number_type' => 'user',
            'role' => 'user',
            'address' => fake()->address(),
            'telephone' => fake()->numerify('08##########'),
            'gender' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ];
    }
}
