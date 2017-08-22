<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function index(Member $member)
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function create(Member $member)
    {
        return view('members.schedules.create', compact('member'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Member $member, Schedule $schedule)
    {
        //validate
        $this->validate($request, array(
            'start_time' => 'required',
            'end_time' => 'required',
            'day_id' => 'required',
        ));

        //store
        $schedule = new Schedule;
        $schedule->start_time = $request->start_time;
        $schedule->end_time = $request->end_time;
        $schedule->day_id = $request->day_id;
        $schedule->notes = $request->notes;
        $schedule->member_id = $member->id;

        $schedule->save();

        Session::flash('success', 'The schedule was successfully created!');

        return redirect()->route('members.show', compact('member'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member, Schedule $schedule)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member, Schedule $schedule)
    {
        return view('members.schedules.edit', compact('member', 'schedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member, Schedule $schedule)
    {
        $this->validate($request, array(
            'start_time' => 'required',
            'end_time' => 'required',
            'day_id' => 'required'

        ));

        $schedule->start_time = $request->start_time;
        $schedule->end_time = $request->end_time;
        $schedule->day_id = $request->day_id;
        $schedule->notes = $request->notes;
        $schedule->member_id = $member->id;

        $schedule->save();

        Session::flash('success', 'The schedule was successfully created!');

        return redirect()->route('members.show', compact('member'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member, Schedule $schedule)
    {
        {
            $schedule->delete();
            Session::flash('message', 'The schedule was successfully deleted.');
            return redirect()->route('members.show', compact('member'));
        }
    }
}
