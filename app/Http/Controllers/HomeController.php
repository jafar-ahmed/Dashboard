<?php

namespace App\Http\Controllers;

use App\Models\App_Contents;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $sliders = Slider::all();
        $app_contents = App_Contents::first();
        $new_products = Product::where('is_active',1)->OrderByDesc('id')->take(8)->get();
        $most_sales_products = Product::where('is_active',1)->OrderByDesc('id')->take(8)
        ->where('on_sale','!=',0)->get();
        return view('home', [
            'sliders' => $sliders,
            'categories' => $categories,
            'app_contents' => $app_contents,
            'new_products' => $new_products,
        ]);
        //return redirect()->route('dashboard');

    }
}