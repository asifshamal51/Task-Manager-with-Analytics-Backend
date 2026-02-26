<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExController extends Controller
{
    public function homepage(){
        $name = 'Asif';
        $animals = ['cat', 'dog', 'mouse'];

        return view('homepage',['allAnimals' =>$animals ,'name' => $name, 'number' => '51']);
    }

    public function aboutPage() {
        return '<h1>About Page</h1><a href="/">back to home</a>';
    }
}
