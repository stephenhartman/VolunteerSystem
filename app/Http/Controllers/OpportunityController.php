<?php

namespace App\Http\Controllers;

use App\Opportunity;
use App\VolunteerCenter;
use App\Member;
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
        elseif (\Request::get('opportunity'))
        {
            $search = \Request::get('opportunity');
            $members = Member::all();
            $opportunity = Opportunity::where('id', $search)->get();
            $collection = collect();
            foreach($members as $member)
            {
                if($opportunity->findMatch($member))
                {
                    $collection->push($opportunity->findMatch($member));
                }
            }

            if($collection->isEmpty())
            {
                Session::flash('error', 'No members found, please search again.');
            }
            else
            {
                return view('members.index', compact('collection'));
            }
        }
        else
        {
            $opportunities = DB::table('opportunities')->paginate(10);
        }
        return view('opportunities.index', ['centers' => $centers, 'opportunities' => $opportunities->appends(Input::except('page'))]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $volunteer_centers = VolunteerCenter::pluck('name', 'id');
        return view('opportunities.create', compact('volunteer_centers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'start_time' => 'required',
            'end_time' => 'required',
            'event_day' => 'required',
            'name' => 'required',

        ));

        //store
        $opportunity = new Opportunity;
        $opportunity->start_time = $request->start_time;
        $opportunity->end_time = $request->end_time;
        $opportunity->event_day = $request->event_day;
        $opportunity->name = $request->name;
        $opportunity->volunteer_center_id = $request->volunteer_center_id;

        $opportunity->save();

        Session::flash('success', 'The opportunity was successfully created!');

        $volunteer_center = VolunteerCenter::find($opportunity->volunteer_center_id)->first();
        return redirect()->route('volunteer_centers.opportunities.show', compact('opportunity', 'volunteer_center'));

    }
}
