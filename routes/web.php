<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome');
});

Route::get('about', function() {
    $people = ['Steve Hartman', 'Kevin Bell', 'Lindsey Wanta', 'Andrew Greer'];

    return view('pages.about', compact('people')); // resources/views/pages/about.blade.php
    //return view('pages.about', ['people' => $people]); pass array
    //return view('pages.about', compact('people'); pass array created with php
    //return view('pages.about')->with('people', $people); use with method
    //return view('pages.about')->withPeople($people); dynamic method
});
