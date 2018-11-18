<?php

namespace App\Modules\Admin\Login\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library\ClassFactory;
use Illuminate\Support\Facades\Auth; 
use Validator;
use App\Models\User;

class LoginController extends Controller
{
	public static $view_path = 'admin.login.views.';	
    protected function guard()
    {
        return Auth::guard('user');
    }
    public function index() {
        return view($this::$view_path.'index');
    }

    public function post(Request $request) {
        $data = [];
        $rules = array(
            'email'    => 'required|email',
            'password' => 'required|'
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $data['type'] = 'error';
            $data['message'] = $validator->errors();

            return $data;
        }

        $credentials = $request->only('email','password');
        $credentials = array_merge($credentials, ['status' => 'active']);
        // dd(Auth::guard('admin')->attempt($credentials));
        
        if(Auth::guard('admin')->attempt($credentials)) {

            // return redirect()->intended('dashboard');
            $data['type'] = 'success';
            $data['message'] = 'Loging-in in a few seconds';

        } else {
            // return redirect()->intended('login');
            $data['type'] = 'error';
            $data['message'] = 'Username or Password Invalid';
        }
        return response()->json($data);
    }

    public function logout(Request $request) {
        Auth('admin')->logout();
        return redirect('/admin/login');
    }
}
