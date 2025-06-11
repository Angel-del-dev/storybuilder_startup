<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class BackofficeHomeController extends Controller
{
    public function Create() : \Inertia\Response {
        return Inertia::render('backoffice/Home');
    }
}
