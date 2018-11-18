<?php

namespace App\Modules\Front\Checkout\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
	public static $view_path = 'front.checkout.views.';	

    public function index(){
        return view($this::$view_path.'index');
    }
}
