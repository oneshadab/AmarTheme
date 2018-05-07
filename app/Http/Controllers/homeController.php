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
        $TITLES=array('WORDPRESS','HTML');
        for($i=0;$i<2;$i++)
        {
            $PRODUCTS[$i]=DB::select( "SELECT products.product_name AS name,
                                          products.product_id as id,
                                          ratings.rating as rating,
                                          images.link as img 
                                     FROM products,ratings,images 
                                    WHERE products.product_category 
                                    LIKE '$TITLES[$i]' 
                                      AND products.product_id=ratings.product_id
                                      AND products.product_id=images.product_id
                                    ORDER BY rand() 
                                    LIMIT 6");
        }
        if(Session::has('email'))
        {
            $email=Session::get('email');
            $user_info=DB::select("SELECT user_id,user_name,email FROM users WHERE email LIKE '$email' ");
            $user_info=$user_info[0];




            return view('home',compact('user_info','PRODUCTS','TITLES'));
        }
        else
        {

            return view('home',compact('PRODUCTS','TITLES'));
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
    public function searchProduct()
    {
        return view('search');
    }
    public function productDetails()
    {
        return view('product');
    }
    public function registration()
    {
        return view('registration');
    }
}