<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reports;
use Illuminate\Support\Facades\Auth;

class ReportsController extends Controller
{

    public function __construct()
        {
            $this->middleware('auth');
        }

    public function create(Request $report) {

        $validatedData = $report->validate([
            'startdate' => 'required|date',
            'enddate' => 'required|date',
            'lastweek' => 'required',
            'thisweek' => 'required'
        ]);
       
        Auth::user();

        $report = new Reports();

        $report-> email=Auth::user()->email;
        $report->startdate = request('startdate');
        $report->enddate = request('enddate');
        $report->lastweek = request('lastweek');
        $report->thisweek = request('thisweek');

        $report->save();
        
        return redirect('/');
    }
}

