<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserFragment extends Model
{
    protected $table = 'user_fragments';
    protected $fillable = [
        'user',
        'fragment'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
