<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function adminLogin()
    {
        return response()->view('auth.admin-login');
    }
    public function adminLoginCheck(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->intended('');
        }
        return response()->view('auth.admin-login');
    }
}
