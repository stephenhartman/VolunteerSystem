<?php

namespace App\Http\Controllers;

use App\Member;
use App\Opportunity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::forget('error');
        if (\Request::get('search'))
        {
            $search = \Request::get('search');
            $members = Member::where('first_name', 'like', '%' .$search. '%')
                ->orWhere('last_name', 'like', '%' . $search . '%')
                ->orderBy('first_name')
                ->paginate(15);
            if ($members->isEmpty())
            {
                Session::flash('error', 'No volunteers found, please search again.');
            }
        }
        elseif (\Request::get('approval_status'))
        {
            $search = \Request::get('approval_status');
            $members = Member::where('approval_status', $search)
                ->orderBy('first_name')
                ->paginate(10);
            if ($members->isEmpty())
            {
                Session::flash('error', 'No volunteers found, please search again.');
            }
        }
        elseif (\Request::get('member'))
        {
            $search = \Request::get('member');
            $opportunities = Opportunity::get_opportunities();
            $member = Member::where('id', $search)->get();
            foreach($opportunities as $opportunity)
            {
                if($member->findMatch($opportunity, $member))
                {
                    $collection->push($opportunity);
                }
            }

            if($collection->isEmpty())
            {
                Session::flash('error', 'No opportunities found, please search again.');
            }
            else
            {
                return redirect()->route('opportunities.search', compact('collection'));
            }
        }
        else
        {
            $members = DB::table('members')->orderBy('first_name')->paginate(15);
        }
        return view('members.index', ['members' => $members->appends(Input::except('page'))]);
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
        //validate
        $this->validate($request, array(
           'first_name' => 'required',
           'last_name' => 'required',
           'email' => 'email',
           'username' => 'required',
           'password' => 'required',
           'street' => 'required',
           'city' => 'required',
           'state' => 'required',
            'zipcode' => 'required',
            'home_phone' => 'required',
            'work_phone' => 'required',
            'cell_phone' => 'required',

        ));

        //store
        $member = new Member;
        $member->first_name = $request->first_name;
        $member->last_name = $request->last_name;
        $member->email = $request->email;
        $member->username = $request->username;
        $member->password = $request->password;
        $member->street = $request->street;
        $member->city = $request->city;
        $member->state = $request->state;
        $member->zipcode = $request->zipcode;
        $member->home_phone = $request->home_phone;
        $member->work_phone = $request->work_phone;
        $member->cell_phone = $request->cell_phone;
        $member->drivers_license = $request->drivers_license;
        $member->ss_card = $request->ss_card;
        $member->approval_status = $request->approval_status;
        $member->user_id = 1;

        if(!$request->has('drivers_license'))
        {
            $request->merge(['drivers_license' => 0]);
        }
        elseif(!$request->has('ss_card'))
        {
            $request->merge(['ss_card' => 0]);
        }
        $member->save();

        Session::flash('success', 'The new member was successfully saved!');

        return redirect()->route('members.show', $member->id);

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
        return view('members.edit', compact('member'));
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
        //validate
        $this->validate($request, array(
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email',
            'username' => 'required |max:60',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'home_phone' => 'required',
            'work_phone' => 'required',
            'cell_phone' => 'required',

        ));

        //store

        $member->first_name = $request->first_name;
        $member->last_name = $request->last_name;
        $member->email = $request->email;
        $member->username = $request->username;
        $member->street = $request->street;
        $member->city = $request->city;
        $member->state = $request->state;
        $member->zipcode = $request->zipcode;
        $member->home_phone = $request->home_phone;
        $member->work_phone = $request->work_phone;
        $member->cell_phone = $request->cell_phone;
        $member->drivers_license = $request->drivers_license;
        $member->ss_card = $request->ss_card;
        $member->approval_status = $request->approval_status;
        $member->user_id = 1;
        if(!$request->has('ss_card'))
        {
            $request->merge(['ss_card' => 0]);
        }

        if(!$request->has('drivers_license'))
        {
            $request->merge(['drivers_license' => 0]);
        }

        $member->save();

        Session::flash('success', 'The member was successfully updated!');

        return redirect()->route('members.show', $member->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member->delete();

        Session::flash('message', 'The member was successfully deleted');
        return redirect()->route('members.index');
    }

    public static function get_members()
    {
        $members = Member::OrderBy('first_name')->get();
        return $members;
    }

    public function search($collection)
    {
        $members = $collection;
        return view('members.index', compact('members'));
    }
}
