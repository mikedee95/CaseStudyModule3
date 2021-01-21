<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if ($request->email = 'mad@gmail.com' && $request->password = '123456'){
            return redirect()->route('books.index');
        }
        else return redirect()->route('showFormLogin');
    }

    public function logout()
    {
//        Auth::logout();
        return redirect()->route('admin.login');
    }
}
