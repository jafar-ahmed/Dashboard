<?php

namespace App\Http\Controllers;

use App\Models\Admin;

class DashboardController extends Controller
{
    public function index()
    {
        return response()->view('dashboard.main-dashboard');
    }
}
