<?php

namespace App\Http\Controllers;

use App\Reports;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;


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

    public function EditProfile() {

       // $user = User::find($id);
       // $user->fill($request->all());
        
        //User::where('id', $id)->update($request->all());
        //return redirect('/');

        //$name = $request->input('username');
        //DB::update('update student set name = ? where id = ?',[$name,$id]);

    }

}
