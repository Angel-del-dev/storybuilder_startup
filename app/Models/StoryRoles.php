<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoryRoles extends Model
{
    protected $table = 'story_roles';
    protected $fillable = [
        'static_id',
        'description'
    ];

    public function user_books() {
        return $this->HasMany(UserBooks::class, 'id');
    }
}
