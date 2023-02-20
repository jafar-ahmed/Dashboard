<?php

namespace App\Http\Controllers;

use App\Jobs\SendMails;
use App\Mail\NotifyEmail;
use App\Models\App_Contents;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        $new_products = Product::where('is_active', 1)->OrderByDesc('id')->take(8)->get();
        $most_sales_products = Product::where('is_active', 1)->OrderByDesc('id')->take(8)
            ->where('on_sale', '!=', 0)->get();
        return view('home', [
            'sliders' => $sliders,
            'categories' => $categories,
            'app_contents' => $app_contents,
            'new_products' => $new_products,
        ]);
//        return redirect()->route('dashboard');

    }

//    public function sendMails(){
//        $emails = User::chunk(50, function ($data){
//            dispatch(new SendMails($data));
//        });
//        return 'return send Mails !!!';
//    }

    public function sendMails()
    {
        try {
            $emails = User::chunk(50, function ($data){
                dispatch(new SendMails($data));
            });
           // return 'return send Mails !!!';
        } catch (\Exception $e) {
            return $this->unexpectedMessage();
        }
        }

//    function is_connected()
//    {
//        $connected = @fsockopen("http://localhost", 8000);
//        //website, port  (try 80 or 443)
//        if ($connected){
//            $is_conn = true; //action when connected
//            fclose($connected);
//        }else{
//            $is_conn = false; //action in connection failure
//        }
//        return $is_conn;
//
//    }

}
