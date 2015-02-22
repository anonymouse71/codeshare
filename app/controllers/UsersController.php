<?php

class UsersController extends BaseController{

	public function __construct(){
		$this->beforeFilter('csrf' , array('on' => 'post'));
	}

	public function getSignup(){
		$this->layout->content = View::make('users.signup');
	}

	public function postSignup(){

		$validator = Validator::make(Input::all(), User::$rules);

		if($validator->passes()){

			$user = new User;
			$user->username = Input::get('username');
			$user->password = Hash::make(Input::get('password'));
			$user->save();

			return Redirect::to('users/signin')->with('message' , 'Thanks For signing up !');
		}else{
			return Redirect::to('users/signup')->with('message' , 'The following errors occurred')->
			withErrors($validator)->withInput();
		}
	}

	public function getSignin(){
		$this->layout->content = View::make('users.signin');
	}

	public function postSignin(){
		if (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password')))) {
			return Redirect::to('/')->with('message' , 'Your are now signed in!');
		} else {
			return Redirect::to('users/signin')->with('message' , 'Your username/password combo was incorrect');
		}
	}

	public function getSignout(){
		Auth::logout();
		return Redirect::to('users/signin')->with('message' , 'You are now signed Out');
	}
}