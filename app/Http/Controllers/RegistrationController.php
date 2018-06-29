<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }

    public function store(Request $request)
    {
    	$this->validate(request(), [
    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|confirmed'
    	]);

        $user = User::create([
            'name' => $request->name, 
            'email' => $request->email,   
            'password' => Hash::make($request->password)
        ]);

        // \Auth::login();
        // \Request::input();
        // request()->input();
        Auth::login($user);

        return redirect()->home();
    }
}
