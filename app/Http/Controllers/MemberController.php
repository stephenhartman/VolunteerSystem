<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (\Request::get('search'))
        {
            $search = \Request::get('search');
            $members = Member::where('first_name', 'like', '%' .$search. '%')
                ->orWhere('last_name', 'like', '%' . $search . '%')
                ->orderBy('first_name')
                ->paginate(15);
            if (!$members)
            {
                session()->flash('message', 'No volunteers found, please search again.');
            }
        }
        elseif (\Request::get('approval_status'))
        {
            $search = \Request::get('approval_status');
            $members = Member::where('approval_status', $search)
                ->orderBy('first_name')
                ->paginate(10);
            if (!$members)
            {
                session()->flash('message', 'No volunteers found, please search again.');
            }
        }
        else
        {
            $members = DB::table('members')->orderBy('first_name')->paginate(15);
        }
        return view('members.index', ['members' => $members]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
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
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        return view('members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
