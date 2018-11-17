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
}
