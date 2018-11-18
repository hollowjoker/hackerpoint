<?php

namespace App\Modules\Front\Shop\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
	public static $view_path = 'front.shop.views.';	

    public function index(){
        return view($this::$view_path.'index');
    }
}
