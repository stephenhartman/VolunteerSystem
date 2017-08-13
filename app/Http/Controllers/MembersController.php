<?php

namespace App\Http\Controllers;

use DB;
use App\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index()
    {
        $members = Member::all();

        return view('members.index', compact('members'));
    }

    public function show(Member $member)
    {
        return view('members.show', compact('member'));
    }
}
