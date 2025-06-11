<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BooksChapters extends Model
{
    protected $table = 'book_chapters';

    protected $fillable = [
        'book_id',
        'title',
        'description',
        'chapter'
    ];

    public function book() {
        return $this->belongsTo(Books::class, 'book_id');
    }
}
