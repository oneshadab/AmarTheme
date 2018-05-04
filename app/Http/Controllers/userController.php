<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Auth;
use Session;
use DB;



class userController extends Controller
{
    //
    public function  validateLogin(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'

        ]);

        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
        );
        if(Auth::attempt($user_data))
        {

            Session::set('email',$request->get('email'));
            return redirect('/loginSuccess');
        }
        else
        {

            return redirect('/registration');
        }

    }
    public function userLogin()
    {
        $email=Session::get('email');
        $user_info=DB::select("SELECT * FROM users WHERE email LIKE '$email' ");
        $user_type=$user_info[0]->user_type;
        $user_name=$user_info[0]->user_name;
       // return $user_name;
        if($user_type=='developer')
            return view('dashboard',compact('user_name'));
        //return view('dashboard',compact('user_name'));
        return redirect('/');
    }
    public function userLogout(Request $request)
    {
        Session()->flush();
        return redirect('/');
    }
    public function getUsername()
    {
        return "Antor";
    }

}
