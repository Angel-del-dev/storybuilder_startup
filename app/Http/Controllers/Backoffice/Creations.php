<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class Creations extends Controller
{
    public function create(): \Inertia\Response {
        return Inertia::render('backoffice/Creations');
    }
}
