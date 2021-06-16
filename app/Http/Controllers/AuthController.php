<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('back.auth.login');
    }

    public function adminLogin()
    {
        return view('back.dashboard');
    }

    public function loginPost(Request $request)
    {
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            toastr()->success('Hoş geldin '.Auth::user()->name);
            return redirect()->route('adminlogin');
        }
        return redirect()->route('login')->withErrors('Miyavvv, doğru gir tırnaklarım!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
