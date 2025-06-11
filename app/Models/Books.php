<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'title',
        'description',
        'image_id'
    ];

    public function users() {
        return $this->HasMany(UserBooks::class, 'id');
    }

    public function chapters() {
        return $this->HasMany(BooksChapters::class, 'id');
    }
}
