<?php

namespace App\Http\Controllers;

use App\EmergencyContact;
use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function create(Member $member)
    {
        return view('members.emergency_contacts.create', compact('member'));
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
        //validate
        $this->validate($request, array(
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'home_phone' => 'required',
            'work_phone' => 'required',
            'cell_phone' => 'required',

        ));

        //store
        $contact = new EmergencyContact;
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->street = $request->street;
        $contact->city = $request->city;
        $contact->state = $request->state;
        $contact->zipcode = $request->zipcode;
        $contact->home_phone = $request->home_phone;
        $contact->work_phone = $request->work_phone;
        $contact->cell_phone = $request->cell_phone;
        $contact->member_id = $member->id;

        $contact->save();

        Session::flash('success', 'The new emergency contact was successfully saved!');

        return redirect()->route('members.show', $member->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @param  \App\EmergencyContact  $emergency_contact
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member, EmergencyContact $emergency_contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @param  \App\EmergencyContact  $emergency_contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member, EmergencyContact $emergency_contact)
    {
        return view('members.emergency_contacts.edit', compact('member', 'emergency_contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @param  \App\EmergencyContact  $emergency_contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member, EmergencyContact $emergency_contact)
    {
        //validate
        $this->validate($request, array(
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'home_phone' => 'required',
            'work_phone' => 'required',
            'cell_phone' => 'required',

        ));

        //store
        $emergency_contact->first_name = $request->first_name;
        $emergency_contact->last_name = $request->last_name;
        $emergency_contact->email = $request->email;
        $emergency_contact->street = $request->street;
        $emergency_contact->city = $request->city;
        $emergency_contact->state = $request->state;
        $emergency_contact->zipcode = $request->zipcode;
        $emergency_contact->home_phone = $request->home_phone;
        $emergency_contact->work_phone = $request->work_phone;
        $emergency_contact->cell_phone = $request->cell_phone;
        $emergency_contact->member_id = $member->id;

        $emergency_contact->save();

        Session::flash('success', 'The emergency contact was successfully updated!');

        return redirect()->route('members.show', $member->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @param  \App\EmergencyContact  $emergency_contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member, EmergencyContact $emergency_contact)
    {
        $emergency_contact->delete();

        Session::flash('message', 'The emergency contact was successfully deleted');
        return redirect()->route('members.show', compact('member'));
        //
    }
}
