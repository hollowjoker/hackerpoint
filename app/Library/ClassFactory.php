<?php

namespace App\Library;
use URL;
use Auth;

class ClassFactory{

	public static function model( $model ){
		$model_name = "\\App\\Models\\$model";
		return new $model_name();
	}

	public static function redirectAccess() {
		$url = URL::current();
		$user = Auth::user();

		if($user['account_type'] == 'Orthotic Tech') {
			$access = array(
				'leads',
			);
		}else{
			$access = array();
		}

		foreach($access as $each){
			if(strpos($url,$each) === false) {
				return $each;
			}
		}

		
	}

}

?>