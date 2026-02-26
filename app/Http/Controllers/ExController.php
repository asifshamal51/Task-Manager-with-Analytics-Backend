<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExController extends Controller
{
    public function homepage(){
        return '<h1>Home Page</h1><a href="/about">go to about page</a>';
    }

    public function aboutPage() {
        return '<h1>About Page</h1><a href="/">back to home</a>';
    }
}
