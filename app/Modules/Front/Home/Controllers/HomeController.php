<?php

namespace App\Modules\Front\Home\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	public static $view_path = 'front.home.views.';	

    public function index(){
        return view($this::$view_path.'index');
    }
}
