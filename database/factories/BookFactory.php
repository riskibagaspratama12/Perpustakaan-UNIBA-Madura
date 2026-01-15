<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => fake()->sentence(3),
            'synopsis' => fake()->paragraph(),
            'publisher' => fake()->company(),
            'writer' => fake()->name(),
            'publish_year' => fake()->numberBetween(1990, 2024),
            'cover' => 'images/books/default.jpg',
            'category' => fake()->randomElement([
                'Fiction',
                'History',
                'Philosophy',
                'Romance'
            ]),
            'amount' => fake()->numberBetween(1, 10),
            'status' => 'Available',
        ];
    }
}
