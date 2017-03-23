<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
	public function show(Request $request)
	{
		$brand = array('apple','samsung','lg','asus','oppo','huawei','lenovo','nokia','esia','nexian');
		// $all = $request->all();
		// var_dump($all);
		$game = $request->input('game');
		$photography = $request->input('photography');
		$utility = $request->input('utility');
		$description = $request->input('description');
		$description = strtolower($description);
		
		$description = explode(" ",$description);

		// echo $game;
		// echo $photography;
		// echo $utility;
		// var_dump($description);
		foreach ($description as $value) {
			// echo $value;
			# code...
			if (in_array($value, $brand)) {
				echo $value;
				# code...
			}
		}



	}
}
