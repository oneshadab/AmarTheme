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
        $categories = array(
            array("title" => "E-Commerce", "icon" => "fab fa-sellcast"),
            array("title" => "Event", "icon" => "fas fa-calendar"),
        );
        for($i = 0; $i < 2; $i++){
            $categories[$i]['products'] = array();
            for($j = 0; $j < 3; $j++){
                $categories[$i]['products'][] = productController::get($i * 3 + $j + 1);
            }
        }
        return view('home', ['categories' => $categories]);
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
        return view('search', ['results' => productController::getAll()]);
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