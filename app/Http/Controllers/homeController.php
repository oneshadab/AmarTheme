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
        $products = productController::getAll();
        $categories = cutArray($products, 3);
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

    public function viewDashboard(Request $request)
    {
        $user_id = Session::get('user_id');
        $text = '';
        $result = DB::select("SELECT DISTINCT products.product_name AS name,
                                          products.product_id as id,
                                          products.product_description as details,
                                          products.product_price as price,
                                          ratings.rating as rating,
                                          images.link as img 
                                     FROM products,ratings,images 
                                    WHERE products.developer_id=$user_id
                                      AND products.product_id=ratings.product_id
                                      AND products.product_id=images.product_id
                                      
                              ");
        $results=json_decode(json_encode($result), true);
        //return $result;
        $results = array_reverse($results);
        return view('dash', ['results' => $results]);
    }

    public function demoView($id)
    {
        $redir="";


        return view('demo', ['id' => $id]);
    }

    public static function startsWith($haystack, $needle)
    {
        $length = strlen($needle);
        return (substr($haystack, 0, $length) === $needle);
    }


    public function searchProduct(Request $request)
    {
        $text = $request->input('text');
        $result = DB::select("SELECT DISTINCT products.product_name AS name,
                                          products.product_id as id,
                                          products.product_description as details,
                                          products.product_price as price,
                                          ratings.rating as rating,
                                          images.link as img 
                                     FROM products,ratings,images 
                                    WHERE 
                                      products.product_name like '%$text%'
                                      AND products.product_id=ratings.product_id
                                      AND products.product_id=images.product_id
                                      LIMIT 9
                              ");
        $results=json_decode(json_encode($result), true);
        //return $result;
        return view('search', ['results' => $results]);
    }
    public function productDetails($id)
    {
        $product = productController::get($id);
        // dd($product);
        $bought = false;
        $developer = false;
        if(Session::has('user_id')){
            $user_id = Session::get('user_id');
            $bought = userController::hasBought($user_id, $id);
            $developer = userController::isDeveloper($user_id, $id);
        }
        $images = productController::getImages($id);
        $suggestions = cutArray(productController::getAll(), 3)[0]['products'];
        $image_id = productController::getImageIds($id);
        return view('product',[
            'product' => $product,
            'bought' => $bought,
            'developer' => $developer,
            'images' => $images,
            'suggestions' => $suggestions,
            'image_id' => $image_id,
        ]);
    }

    public function registration()
    {
        return view('registration');
    }
}