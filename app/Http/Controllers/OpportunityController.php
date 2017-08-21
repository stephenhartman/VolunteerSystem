<?php

namespace App\Http\Controllers;

use App\Opportunity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OpportunityController extends Controller
{
    public function index()
    {
        $opportunities = DB::table('opportunities')->paginate(10);
        return view('opportunities.index', ['opportunities' => $opportunities]);
    }
}
