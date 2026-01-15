<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use Illuminate\Http\Request;

class UserBorrowController extends Controller
{
 public function store(Request $request)
{
    $user = auth()->user();

    // hitung jumlah buku yang sedang dipinjam
    $totalBorrowed = \App\Models\Borrow::where('user_id', $user->id)->count();

    // BATAS 3 BUKU
    if ($totalBorrowed >= 3) {
        return back()->withErrors([
            'limit' => 'User tidak boleh meminjam lebih dari 3 buku'
        ]);
    }

    \App\Models\Borrow::create([
        'user_id'      => $user->id,
        'book_id'      => $request->book_id,
        'borrowed_at'  => now(),
        'duration'     => 7,
        'amount'       => 1, 
        'confirmation' => true,  
    ]);

    return back()->with('success', 'Berhasil meminjam buku');
}

}
