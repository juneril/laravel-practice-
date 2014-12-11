<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Accounts extends Eloquent implements UserInterface, RemindableInterface {

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
	
public static function InsertData($Data){

	$password = Hash::make($Data['password']);
	$accounts=array(
		'email'=> $Data['email'],
		'firstname' => $Data['firstname'],
		'lastname'=> $Data['lastname'],
		'password'=> $password
	);

$acc= DB::table('users')->insert($accounts);
if($acc){
	$result['success'] = true;
    $result['msg'] = 'Information successfully saved';
   }else{
    $result['success'] = false;
    $result['msg'] = 'WARNING: Unknown error occur while changing password!';
   }
   return $result;

}
 







}
