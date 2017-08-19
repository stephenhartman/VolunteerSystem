<?php

namespace App\Http\Controllers;

use App\Member;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\MemberSearch;

class SearchController extends Controller
{
    public function filter(Request $request)
    {
        return MemberSearch\MemberSearch::apply($request);
    }
}
