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
            return view('home',compact('user_info'));
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