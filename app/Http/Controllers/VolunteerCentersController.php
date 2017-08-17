<?php

namespace App\Http\Controllers;

use App\VolunteerCenter;
use Illuminate\Http\Request;

class VolunteerCentersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volunteer_centers = Opportunity::all();
        return view('volunteer_centers.index', compact('volunteer_centers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('volunteer_centers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VolunteerCenter  $volunteerCenter
     * @return \Illuminate\Http\Response
     */
    public function show(VolunteerCenter $volunteerCenter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VolunteerCenter  $volunteerCenter
     * @return \Illuminate\Http\Response
     */
    public function edit(VolunteerCenter $volunteerCenter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VolunteerCenter  $volunteerCenter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VolunteerCenter $volunteerCenter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VolunteerCenter  $volunteerCenter
     * @return \Illuminate\Http\Response
     */
    public function destroy(VolunteerCenter $volunteerCenter)
    {
        //
    }
}
