<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');


	public static $rules = array(
			'username' => 'required|alpha_num|between:2,8|unique:users',
			'password' => 'required|alpha_num|between:2,8',
			'password_confirmation' => 'required|alpha_num|between:6,12'
		);


	public function favorites(){
		return $this->hasMany('Favorite');
	}
}
