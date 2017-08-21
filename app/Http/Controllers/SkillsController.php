<?php

namespace App\Http\Controllers;

use App\Skill;
use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class SkillsController extends Controller
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
        return view('members.skills.create', compact('member'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Member $member, Skill $skill)
    {
        $this->validate($request, array(
            'skill' => 'required',

        ));

        //store

        $skill->skill = $request->skill;
        $skill->skill_level = $request->skill_level;
        $skill->member_id = $member->id;

        if(!$request->has('skill_level'))
        {
            $request->merge(['skill_level' => '0']);
        }

        $skill->save();

        Session::flash('success', 'The skill was successfully created!');

        return redirect()->route('members.show', compact('member'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member, Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member, Skill $skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member, Skill $skill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member, Skill $skill)
    {
        $skill->delete();
        Session::flash('message', 'The skill was successfully deleted.');
        return redirect()->route('members.show', compact('member'));
    }
}
