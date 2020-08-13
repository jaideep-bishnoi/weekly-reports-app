<?php

namespace App\Http\Controllers;

use App\Reports;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;


class DashboardController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }
    

    public function show() {

        $users = User::all();   //old method
  
        $reports = Reports::all();  //old method

       return view('dashboard', compact('users','reports'));

       
    }

    public function reports() {
        return view('reports');
    }

    public function profile() {

        return view('profile');
    }


    public function EditProfile(Request $request) {

        $request->validate([

            'currentpassword' => ['required', function ($attribute, $value, $fail){
                if (!Hash::check($value, Auth::user()->password)) {
                    $fail('Old Password didn\'t match');
                }
            }],

            'newpassword' => ['required'],

            'confirmpassword' => ['same:newpassword'],

        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->newpassword)]);

        return redirect('/profile');

    }

}
