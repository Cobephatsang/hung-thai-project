<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function store(Request $request)
    {
        // check validate
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // check user pass
        if(Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ], $request->input('remember'))){
            return redirect()->route('admin');
        }
        Session::flash('error', 'Email hoặc mật khẩu không đúng !');
        return redirect()->back();
    }
}
