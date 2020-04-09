<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use Illuminate\Http\Request;

use App\User;

use App\Mail\Welcome;

class RegistrationController extends Controller
{
    public function create() {

    	return view('registration.create');
    }

	public function store(RegistrationRequest $request) {

    	//Validate the form - use this if not many fields, otherwise use registration request

		/*$this->validate(request(), [

			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required|confirmed'
		]);*/

		//Create and save user

		//$user = User::create(request(['name', 'email', bcrypt('password')]));


		// if move User::create to RegistrationRequest call function:
		//$request->persist();


		$user = User::create([
			'name' => request('name'),
			'email' => request('email'),
			'password' => bcrypt(request('password'))
		]);

		//sign them in

		auth()->login($user);


		\Mail::to($user)->send(new Welcome($user));

		session()->flash('message', "Thanks so much for signing up!");

		//redirect to home page
		return redirect()->home();
	}
}
