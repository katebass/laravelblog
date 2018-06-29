<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest')->except('destroy');
	}

    public function create()
    {
    	return view('sessions.create');
    }

   	public function store(Request $request)
   	{
   		//Attempt to authenticate the user
   		//if (! Auth::attempt( request(['email', 'password']) ) )
      
      if (! Auth::attempt( ['email' => $request->email, 'password' => $request->password] ) )
   		{
   			return back()->withErrors([

   				'message' => 'Invalig email or password:('

   			]);
   		}

   		return redirect()->home();

   	}

    public function destroy()
    {
    	Auth::logout();

    	return redirect()->home();
    }
}
