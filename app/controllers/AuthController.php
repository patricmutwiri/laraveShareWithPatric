<?php

class AuthController extends \BaseController {

  // SignUp Screen
	public function signUp()
	{
		return View::make('register');
	}

	public function signIn()
	{
		return View::make('login');
	}

	public function login()
	{
		$rules = [
			'email' => 'required|exists:users,email',
			'password' => 'required',
		];
		$data = Input::only(['email', 'password']);

		$admin = [
            'email'     => 'loisenjoki6@gmail.com',
            'password'    => 'youandme',
            ];

		$validation = Validator::make($data, $rules);
		if($validation->passes())
		{
			// Create session
			if(Auth::attempt($data))
			{
				return Redirect::to('owners');
			}
			elseif(Auth::attempt($admin))
			{
				return Redirect::to('owners');
			}
			else{

			return Redirect::back()->with('message', 'Check email and Password.');
			
			}
		}

		return Redirect::back()->withErrors($validation);
	}

	// Account Creation
	public function createAccount()
	{
		$rules = [
		    'firstname'=>'required',
			'lastname' =>'required',
			'email' => 'required|unique:users,email',
			'password' => 'required|min:5',
			'confirm' => 'required|same:password'
		];
		$data = Input::only(['firstname', 'lastname','email', 'password','confirm']);
		$validation = Validator::make($data, $rules);
		if($validation->passes())
		{
			$user = new User;
			$user->firstname= Input::get('firstname');
			$user->lastname = Input::get ('lastname');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->password = Hash::make(Input::get('confirm'));
			$user->save();
			// Login User after creating account
			Auth::login($user);

			return Redirect::to('/');
		}

		return Redirect::back()->withErrors($validation)->withInput();
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('signin');
	}
}


