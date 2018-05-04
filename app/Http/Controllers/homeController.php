<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Validator;
use Auth;
use DB;


class homeController extends Controller
{
    //
    public function index()
    {
        if(Session::has('email'))
        {
            $email=Session::get('email');
            $user_info=DB::select("SELECT user_id,user_name,email FROM users WHERE email LIKE '$email' ");
            $user_info=$user_info[0];

            $WORDPRESS=DB::select("SELECT * FROM products WHERE product_category LIKE 'WORDPRESS' ORDER BY rand() LIMIT 6");
            $HTML=DB::select("SELECT * FROM products WHERE product_category LIKE 'HTML' ORDER BY rand() LIMIT 6");
            $TITLES=array('WORDPRESS','HTML');
            $PRODUCTS=array('0' => $WORDPRESS,'1'=> $HTML);

            return view('home',compact('user_info','PRODUCTS','TITLES'));
        }
        else
        {

            return view('home');
        }

    }

    public function dashboard()
    {
        if(Session::has('email'))
        {
            return view('dashboard');

        }
        else
        {
            return redirect('/');
        }


    }
}