<?php

namespace App\Http\Controllers;

use App\Opportunity;
use App\VolunteerCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class OpportunityController extends Controller
{
    public function index()
    {
        $centers = VolunteerCenter::orderBy('name')->get();
        Session::forget('error');
        if (\Request::get('search'))
        {
            $search = \Request::get('search');
            $opportunities = Opportunity::where('name', 'like', '%' .$search. '%')
                ->orderBy('name')
                ->paginate(10);
            if ($opportunities->isEmpty())
            {
                Session::flash('error', 'No opportunities found, please search again.');
            }
        }
        elseif (\Request::get('volunteer_center_id'))
        {
            $search = \Request::get('volunteer_center_id');
            $opportunities = Opportunity::where('volunteer_center_id', $search)
                ->orderBy('name')
                ->paginate(10);
            if ($opportunities->isEmpty())
            {
                Session::flash('error', 'No opportunities found, please search again.');
            }
        }
        else
        {
            $opportunities = DB::table('opportunities')->paginate(10);
        }
        return view('opportunities.index', ['centers' => $centers, 'opportunities' => $opportunities->appends(Input::except('page'))]);
    }
}
