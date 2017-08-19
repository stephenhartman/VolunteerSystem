<?php

namespace App\Http\Controllers;

use App\Member;
use App\Http\Requests;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function filter(Request $request, Member $member)
    {
        $member = $member->newQuery();

        // Search member based on first name
        if ($request->has('first_name')) {
            $member->where('first_name', $request->input('first_name'));
        }

        // Search member based on last name
        if ($request->has('last_name')) {
            $member->where('last_name', $request->input('last_name'));
        }

        // Search member based on approval status
        if ($request->has('approval_status')) {
            $member->where('approval_status', $request->input('approval_status'));
        }

        return $member->get();
    }
}
