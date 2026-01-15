<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BorrowLimitTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_cannot_borrow_more_than_three_books()
    {
        $user = User::factory()->create();

        $books = Book::factory()->count(4)->create();

        $this->actingAs($user);

        // pinjam 3 buku pertama
        for ($i = 0; $i < 3; $i++) {
            $this->post('/borrow', [
                'book_id' => $books[$i]->id,
            ]);
        }

        // pinjam buku ke-4 (HARUS DITOLAK)
        $response = $this->post('/borrow', [
            'book_id' => $books[3]->id,
        ]);

        $response->assertSessionHasErrors();
    }
}
