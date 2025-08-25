<?php

namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class FrontendController extends Controller
{
    public function index()
    {   
        return Inertia::render('site/Welcome');
    }

    public function service()
    {
        return Inertia::render('site/Service');
    }
}
