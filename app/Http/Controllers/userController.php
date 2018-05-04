<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Auth;
use Session;



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
            return redirect('/dashboard');
        }
        else
        {

            return redirect('/registration');
        }

    }
    public function userLogin()
    {
        $email=Session::get('email');
       // $user_info=DB::selct("SELECT * FROM users WHERE email LIKE $email ");
        //dd($user_info);

        return view('dashboard')->with('name', 'Victoria');
    }
    public function userLogout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
