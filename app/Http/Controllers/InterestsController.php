<?php

namespace App\Http\Controllers;

use App\Interests;
use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class InterestsController extends Controller
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
        return view('members.interests.create', compact('member'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Member $member, Interests $interest)
    {
        $this->validate($request, array(
            'interest' => 'required',
        ));

        //store

        $interest->interest = $request->interest;
        $interest->member_id = $member->id;

        $interest->save();

        Session::flash('success', 'The interest was successfully created!');

        return redirect()->route('members.show', compact('member'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @param  \App\Interests  $interests
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member, Interests $interests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @param  \App\Interests  $interests
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member, Interests $interests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @param  \App\Interests  $interests
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member, Interests $interests)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @param  \App\Interests  $interests
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member, Interests $interests)
    {
        //
    }
}
