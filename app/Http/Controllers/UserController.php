<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
    }


    public function index() {
        return view('add-user');
    }
    
    protected function validator(Request $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function create(Request $user) {

        $user = new User();

        $user->username = request('username');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));

        $user->save();
        
        return redirect('/add-user');
    }
}
