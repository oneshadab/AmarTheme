<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Auth;
use Session;
use DB;
class productController extends Controller
{
    public static function getAll(){
        $products=array();
        $TITLES=array('WORDPRESS','HTML');
        for($i=0;$i<2;$i++) {
            $products[$TITLES[$i]]=array();
            $products[$TITLES[$i]]['products'] = DB::select("SELECT products.product_name AS name,
                                          products.product_id as id,
                                          ratings.rating as rating,
                                          images.link as img 
                                     FROM products,ratings,images 
                                    WHERE products.product_category 
                                    LIKE '$TITLES[$i]' 
                                      AND products.product_id=ratings.product_id
                                      AND products.product_id=images.product_id
                                    ORDER BY rand() 
                                    LIMIT 3");
        }
        $products=json_decode(json_encode($products), true);
        return $products;
    }
    public static function get($id){
        $result = DB::select("SELECT products.product_name AS name,
                                          products.product_id as id,
                                          products.product_description as details,
                                          products.product_price as price,
                                          ratings.rating as rating,
                                          images.link as img 
                                     FROM products,ratings,images 
                                    WHERE 
                                      products.product_id=$id 
                                      AND products.product_id=ratings.product_id
                                      AND products.product_id=images.product_id
                                      LIMIT 1");
        //$result=json_decode(json_encode($result), true);
        return $result;
    }
    public function show($id){
        return view('product', ['product' => self::get($id)]);
    }
    public function search($text){
        #SELECT * FROM PRODUCT WHERE * LIKE '%$text%'
        #return view(search with array of product data)
    }
}