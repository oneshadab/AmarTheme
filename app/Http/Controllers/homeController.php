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
        $result = productController::getAll();
        //dd($result);
        $products = json_decode(json_encode($result), true);
        //dd($categories);
        $categories = [];
        foreach (array_chunk($products, 3) as $p){
            $categories[] = ['products' => $p];
        }
        return view('home', ["categories" => $categories]);
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

    public static function startsWith($haystack, $needle)
    {
         $length = strlen($needle);
        return (substr($haystack, 0, $length) === $needle);
    }


    public function searchProduct(Request $request)
    {
        $text = $request->input('text');
        $results = array();
        $products = productController::getAll();
        foreach($products as $p){
            if(self::startsWith($p['name'], $text)){
                $results[] = $p;
            }
        }
        return view('search', ['results' => $results]);
    }
    public function productDetails($id)
    {
        $result = productController::get($id);
        $product = json_decode(json_encode($result), true);
        // dd($product);
        return view('product',compact('product'));
    }

    public function registration()
    {
        return view('registration');
    }
}