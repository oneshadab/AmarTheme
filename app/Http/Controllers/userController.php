<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class userController extends Controller
{
    //
    public function userLogin()
    {
        return view('auth.login');
    }
    public function userAuthentication()
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $users=\DB::table('user')->where('email',$email)->where('password',$password)->exists();
        if($users)
            return "Exists";
        return "Doesn't Exist";
    }

}
