<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

	        'name' => 'required',
	        'email' => 'required|email',
	        'password' => 'required|confirmed'
        ];
    }

    // can also add this here and remove from RegistrationController
    /*public function persist() {

	    $user = User::create(

	    	$this->only(['name', 'email', 'password'])
	    );

	    //sign them in

	    auth()->login($user);


	    \Mail::to($user)->send(new Welcome($user));
    }*/
}
