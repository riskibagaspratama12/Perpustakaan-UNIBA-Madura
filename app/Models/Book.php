<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public function getCoverUrlAttribute()
{
    if (!$this->cover) {
        return asset('images/books/default.jpg');
    }

    if (str_starts_with($this->cover, 'images/')) {
        return asset($this->cover);
    }

    return asset('storage/' . $this->cover);
}


    public const STATUSES = [
        'Available' => 'Tersedia',
        'Unavailable' => 'Tidak tersedia',
    ];

    protected $fillable = [
        'title',
        'synopsis',
        'publisher',
        'writer',
        'publish_year',
        'cover',
        'category',
        'amount',
        'status',
    ];

    public function borrows()
    {
        return $this->hasMany(Borrow::class);
    }
}
