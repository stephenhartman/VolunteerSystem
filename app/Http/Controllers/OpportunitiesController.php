<?php

namespace App\Http\Controllers;

use App\Opportunity;
use App\VolunteerCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class OpportunitiesController extends Controller
{
    protected $dates = ['created_at', 'updated_at', 'event_day'];
    /**
     * Display a listing of the resource.
     *
     * @param  \App\VolunteerCenter  $volunteerCenter
     * @return \Illuminate\Http\Response
     */
    public function index(VolunteerCenter $volunteer_center)
    {
        $opportunities = VolunteerCenter::with('opportunities')->where('id', $volunteer_center)->paginate(10);
        return view('volunteer_centers.opportunities.index', compact('opportunities', 'volunteer_center'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\VolunteerCenter  $volunteerCenter
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, VolunteerCenter $volunteer_center)
    {
        return view('volunteer_centers.opportunities.create', compact('volunteer_center'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VolunteerCenter  $volunteerCenter
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, VolunteerCenter $volunteer_center, Opportunity $opportunity)
    {
        $this->validate($request, array(
            'start_time' => 'required',
            'end_time' => 'required',
            'event_day' => 'required',
            'name' => 'required',

        ));

        //store

        $opportunity->start_time = $request->start_time;
        $opportunity->end_time = $request->end_time;
        $opportunity->event_day = $request->event_day;
        $opportunity->name = $request->name;
        $opportunity->volunteer_center_id = $volunteer_center->id;

        $opportunity->save();

        Session::flash('success', 'The opportunity was successfully created!');

        return redirect()->route('volunteer_centers.opportunities.show', compact('opportunity', 'volunteer_center'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VolunteerCenter  $volunteerCenter
     * @param  \App\Opportunity  $opportunity
     * @return \Illuminate\Http\Response
     */
    public function show(VolunteerCenter $volunteer_center, Opportunity $opportunity)
    {
        return view('volunteer_centers.opportunities.show')->with(compact('opportunity', 'volunteer_center'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VolunteerCenter  $volunteerCenter
     * @param  \App\Opportunity  $opportunity
     * @return \Illuminate\Http\Response
     */
    public function edit(VolunteerCenter $volunteer_center, Opportunity $opportunity)
    {
        return view('volunteer_centers.opportunities.edit', compact('opportunity', 'volunteer_center'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VolunteerCenter  $volunteerCenter
     * @param  \App\Opportunity  $opportunity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VolunteerCenter $volunteer_center, Opportunity $opportunity)
    {
        //validate
        $this->validate($request, array(
            'start_time' => 'required',
            'end_time' => 'required',
            'event_day' => 'required',
            'name' => 'required',

        ));

        //store

        $opportunity->start_time = $request->start_time;
        $opportunity->end_time = $request->end_time;
        $opportunity->event_day = $request->event_day;
        $opportunity->name = $request->name;
        $opportunity->volunteer_center_id = $volunteer_center->id;

        $opportunity->save();

        Session::flash('success', 'The opportunity was successfully updated!');

        return redirect()->route('volunteer_centers.opportunities.show', compact('opportunity', 'volunteer_center'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VolunteerCenter  $volunteerCenter
     * @param  \App\Opportunity  $opportunity
     * @return \Illuminate\Http\Response
     */
    public function destroy(VolunteerCenter $volunteer_center, Opportunity $opportunity)
    {
        $opportunity->delete();
        return redirect()->route('volunteer_centers.opportunities.index', 'volunteer_center');
    }
}
