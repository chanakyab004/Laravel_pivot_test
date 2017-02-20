<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Device;

class UserController extends Controller
{
    //
   Public function Index()
    {
    	
		$user_devices = User::with(['devices'])->paginate(2);
		// currently used code
		//foreach ($user_devices as $ud) 
		//{
			//echo '<pre>';
			//var_dump($ud->toArray()["name"]);
			//var_dump($ud->toArray()["email"]);
			//	foreach ($ud->toArray()["devices"] as $dn)
			//   {
			//	echo '<pre>';
			//	var_dump($dn["device_number"]);
			//	echo '</pre>';
			//	}

			//echo '</pre>';
		//}


		   $user = User::find(1);
			//foreach ($user->devices as $device) {
			//echo '<pre>';
			//var_dump($device->toArray()["device_number"]);
			//echo '</pre>';
			//}
    	$devices = Device::paginate(2);
    	return view('user.index', array('devices'=>$devices,'users'=>$user_devices));

    } 
    
}
