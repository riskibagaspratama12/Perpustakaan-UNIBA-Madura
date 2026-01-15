<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BorrowFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'book_id' => Book::factory(),
            'borrowed_at' => now(),
            'duration' => 3,
            'amount' => 1,
            'confirmation' => true,
        ];
    }
}
