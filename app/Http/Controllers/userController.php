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
            $email = $request->get('email');
            $user_info=DB::select("SELECT * FROM users WHERE email LIKE '$email' ");
            Session::set('email',$request->get('email'));
            Session::set('user_id', $user_info[0]->user_id);
            return redirect('/dash');
        }
        else
        {

            return redirect('/registration');
        }

    }

    public function  validateLoginREST(Request $request)
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
            $email = $request->get('email');
            $user_info=DB::select("SELECT * FROM users WHERE email LIKE '$email' ");
            Session::set('user_id', $user_info[0]->user_id);
            Session::set('email',$request->get('email'));
            return json_encode(['login' => True]);
        }
        else
        {

            return json_encode(['login' => False]);
        }

    }


    public function userLogin()
    {
        $email=Session::get('email');
        $user_info=DB::select("SELECT * FROM users WHERE email LIKE '$email' ");
        $user_type=$user_info[0]->user_type;
        $user_name=$user_info[0]->user_name;
        // return $user_name;
        if(1)
            return view('dashboard',compact('user_name'));
        //return view('dashboard',compact('user_name'));
        return redirect('/');
    }
    public function userLogout(Request $request)
    {
        Session()->flush();
        return redirect('/');
    }
    public function toCart($id)
    {
        if(!Session::has('cart')) Session::put('cart', array());
        $cart = Session::get('cart');
        if(empty($cart[$id])) $cart[$id] = 0;
        $cart[$id] ++;
        Session::put('cart', $cart);
        return redirect('/cart');
    }


    public function viewCart()
    {
        if(!Session::has('cart')) Session::put('cart', array());
        $products = array();
        foreach (Session::get('cart') as $id => $count){
            $p = productController::get($id);

            $p['count'] = $count;
            $products[] = $p;
        }
        return view('cart', ['items' => $products]);
    }

    public function viewCartREST(){
        if(!Session::has('cart')) Session::put('cart', array());

        return json_encode(Session::get('cart'));

    }


    public function clearCart(){
        Session::put('cart', []);
        return redirect('/cart');
    }


    public function toCartREST($id){
        if(!Session::has('cart')) Session::put('cart', array());
        $cart = Session::get('cart');
        if(empty($cart[$id])) $cart[$id] = 0;
        $cart[$id] ++;
        Session::put('cart', $cart);
        return json_encode($cart);
    }

    public function viewProfile(){
        $user_id = Session::get('user_id');
        $product_id = DB::select("SELECT product_id FROM transactions WHERE buyer_id=$user_id");
        $product_id = json_decode(json_encode($product_id), true);
        $products = [];
        foreach ($product_id as $row){
            $products[] = productController::get($row['product_id']);
        }
        $categories = cutArray($products, 3);
        return view('profile', ["categories" => $categories]);
    }

    public function completePayment(){
        if(!Session::has('cart')) Session::put('cart', array());
        $user_id = Session::get('user_id');
        $items = [];
        foreach (Session::get('cart') as $id => $count){
            $t = ['quantity' => $count, 'product_id' => $id, 'buyer_id' => $user_id];
            $has = DB::table('transactions')
                ->where('product_id', $id)
                ->where('buyer_id', $user_id)
                ->first();
            if(empty($has)) DB::table('transactions')->insert($t);
            $items[] = productController::get($id);
        }
        return view('cart_download', ['items' => $items]);

    }

}
