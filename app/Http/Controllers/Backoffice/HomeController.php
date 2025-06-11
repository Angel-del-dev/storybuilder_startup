<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function Create() : \Inertia\Response {
        return Inertia::render('backoffice/Home');
    }
}
