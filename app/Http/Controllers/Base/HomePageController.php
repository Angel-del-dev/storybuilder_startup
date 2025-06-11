<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class HomePageController extends Controller
{
    public function Create(): \Inertia\Response {
        return Inertia::render('base/Home');
    }
}
