<?php

namespace App\Http\Controllers;

use App\EmergencyContact;
use Illuminate\Http\Request;

class EmergencyContact extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = EmergencyContact::all();
        return view('emergency_contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('emergency_contacts.create');
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
     * @param  \App\EmergencyContact  $emergencyContact
     * @return \Illuminate\Http\Response
     */
    public function show(EmergencyContact $emergencyContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmergencyContact  $emergencyContact
     * @return \Illuminate\Http\Response
     */
    public function edit(EmergencyContact $emergencyContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmergencyContact  $emergencyContact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmergencyContact $emergencyContact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmergencyContact  $emergencyContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmergencyContact $emergencyContact)
    {
        //
    }
}
