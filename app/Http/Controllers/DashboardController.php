<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{

    public function adminLogin()
    {
        return response()->view('auth.admin-login');
    }
    public function adminLoginCheck(Request $request)
    {
//        dd('gdgbergber');
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/dashboard');
        }
        return back()->withInput($request->only('email'));
    }
}
