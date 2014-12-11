<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{

		return View::make('hello');
	}

	public function showCustomers()
	{
		$user = Customers::getCustomerData();

		$data['user'] = $user;

		View::share($data);
		
		return View::make('customers');
	}
	public function showRegistration()
	{
		
		return View::make('registernewcustomer');
	}
	public function showManage()
	{
		
		return View::make('manage');
	}
	public function showLogin()
	{
		
		return View::make('jun');
	}
	public function showHome()
	{
		
		return View::make('home');
	}
	public function InsertSignup()
	{
		$data = Input::all();

		return Accounts::InsertData($data['user']);
	}
	public function InsertCustomer()
	{
		$data = Input::all();

		return Customers::InsertData($data['customer']);
	}
	public  function Login(){



$Data= Input::all();
// print_r($Data);
// print_r($Data['user']);

 	$userdata = array(
	    'email'  => $Data['user']['username'],
	    'password' => $Data['user']['password']
	);

   if (Auth::attempt($userdata)) {
	   	$result['success'] = true;
	    $result['msg'] = 'Succesfully Login';
   } else {
   		$result['success'] = false;
    	$result['msg'] = 'WARNING: Unknown error occur while changing password!';

 
     return Redirect::to('/home')
     ->with('flash_error', 'Your username/password combination was incorrect.');
   }
   return $result;

   
	

}
}
