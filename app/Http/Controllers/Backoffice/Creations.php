<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\UserBooks;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class Creations extends Controller
{
    public function create(): \Inertia\Response {
        $books = UserBooks::with('book', 'role')
            ->where('user_id', '=' , Auth::user()->id)
            ->get();
        
        return Inertia::render('backoffice/Creations', [
            'books' => $books
        ]);
    }
}
