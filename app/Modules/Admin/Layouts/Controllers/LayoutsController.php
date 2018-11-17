<?php

namespace App\Modules\Admin\Layouts\Controllers;

use App\Http\Controllers\Controller;

class LayoutsController extends Controller
{
    public static $view_path = 'admin.layouts.views.';

    public function index()
    {
        return view($this::$view_path . 'index');
    }

    public function seller_login()
    {
        return view($this::$view_path . 'seller-login');
    }

    public function seller_signup()
    {
        return view($this::$view_path . 'seller-signup');
    }
    public function insights()
    {
        return view($this::$view_path . 'insights');
    }
}
