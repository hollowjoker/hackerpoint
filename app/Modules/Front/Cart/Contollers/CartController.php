<?php

namespace App\Modules\Front\Cart\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
	public static $view_path = 'front.cart.views.';	

    public function index(){
        return view($this::$view_path.'index');
    }
}
