<?php

namespace App\Modules\Admin\Dashboard\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
	public static $view_path = 'admin.dashboard.views.';	

    public function index(){
        return view($this::$view_path.'index');
    }
}
