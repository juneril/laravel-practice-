<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Customers extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'customers';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	
public static function InsertData($Data){



	$accounts=array(
		'c_fname'=> $Data['fname'],
		'c_lname' => $Data['lname'],
		'c_address'=> $Data['address'],
		'c_fathersname'=> $Data['fathersname'],
		'c_mothersname' => $Data['mothersname'],
		'c_birthdate'=> $Data['month']." ".$Data['day']." ,".$Data['year'],
		'c_gender'=> $Data['gender'],
		
	);
		
	
$acc= DB::table('customers')->insert($accounts);
if($acc){
	$result['success'] = true;
    $result['msg'] = 'Information successfully saved';
    $message="Information successfully saved";

   }else{
    $result['success'] = false;
    $result['msg'] = 'WARNING: Unknown error occur while changing password!';
   }
   return $result;

}
 
	public static function getCustomerData(){

	  	$results = DB::table('customers')->get();
		return $results;
	}







}
