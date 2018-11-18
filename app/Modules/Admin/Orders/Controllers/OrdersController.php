<?php

namespace App\Modules\Admin\Orders\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Library\ClassFactory as CF;


class OrdersController extends Controller
{
	public static $view_path = 'admin.orders.views.';	

    public function index(){
        return view($this::$view_path.'index');
    }
}
