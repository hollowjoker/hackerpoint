<?php

namespace App\Modules\Admin\Registration\Controllers;

use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    public static $view_path = 'admin.registration.views.';

    public function index()
    {
        return view($this::$view_path . 'index');
    }
}
