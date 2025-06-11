<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserBooks extends Model
{
    protected $table = 'users_books';

    protected $fillable = [
        'user_id',
        'role_id',
        'book_id',
        'description'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function book() {
        return $this->belongsTo(Books::class, 'book_id');
    }

    public function role() {
        return $this->belongsTo(StoryRoles::class, 'role_id');
    }
}
