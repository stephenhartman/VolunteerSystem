<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
    $people = ['Steve Hartman', 'Kevin Bell', 'Lindsey Wanta', 'Andrew Greer'];

    return view('pages.about', compact('people')); // resources/views/pages/about.blade.php
    //return view('pages.about', ['people' => $people]); pass array
    //return view('pages.about', compact('people'); pass array created with php
    //return view('pages.about')->with('people', $people); use with method
    //return view('pages.about')->withPeople($people); dynamic method
    }
}
