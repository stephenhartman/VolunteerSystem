<?php

namespace App\Http\Controllers;

use App\EmergencyContact;
use App\Member;
use Illuminate\Http\Request;

class EmergencyContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function index(Member $member)
    {
        $contacts = EmergencyContact::all();
        return view('emergency_contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function create(Member $member)
    {
        return view('emergency_contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Member $member)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @param  \App\EmergencyContact  $emergencyContact
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member, EmergencyContact $emergencyContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @param  \App\EmergencyContact  $emergencyContact
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member, EmergencyContact $emergencyContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @param  \App\EmergencyContact  $emergencyContact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member, EmergencyContact $emergencyContact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @param  \App\EmergencyContact  $emergencyContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member, EmergencyContact $emergencyContact)
    {
        //
    }
}
