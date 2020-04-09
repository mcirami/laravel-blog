<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

	public function __construct(){
		$this->middleware('guest', ['except' => 'destroy']);
	}

	public function create() {

		return view('sessions.create');
	}

	public function store() {

		//attempt to auth user //if so, sign them in

		if (!auth()->attempt(request(['email', 'password'])) ) {

			//if not redirect back
			return back()->withErrors([
				'message' => 'Please check your credentials and try again.'
			]);
		}

		//if so redirect to home
		return redirect()->home();
	}

	public function destroy() {
		auth()->logout();

		return redirect()->home();
	}
}
