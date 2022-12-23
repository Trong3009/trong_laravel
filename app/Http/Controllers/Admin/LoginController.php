<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FormPostLogin;

class LoginController extends Controller
{
    public function __construct()
    {
       
    }
    public function index(Request $request)
    {
        return view('login.form_login');
    }
    public function handle(FormPostLogin $request)
    {
        $user = $request->username;
        $pass = $request->password;
        if($user === 'admin' && $pass = '123456'){
            $request->session()->put('username',$user);
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->back()->with('error_login', 'tai khoan khong ton tai');
        }
    }
}

