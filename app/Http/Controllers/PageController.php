<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return ('home');
    }

    public function about()
    {
        return ('pages.about');
    }

    public function blog()
    {
        return ('pages.blog');
    }
}
