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

Route::get('/', 'PagesController@home');

Route::get('about', 'PagesController@about');

Route::resource('members', 'MemberController');

Route::resource('opportunities', 'OpportunitiesController');

Route::resource('schedules', 'SchedulesController');

Route::resource('emergency_contacts', 'EmergencyContactController');

Route::resource('interests', 'InterestsController');

Route::resource('volunteer_centers', 'VolunteerCenterController');
