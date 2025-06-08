<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class HomeController extends Controller
{
    public function Create(): \Inertia\Response {
        return Inertia::render('base/Home');
    }
}
