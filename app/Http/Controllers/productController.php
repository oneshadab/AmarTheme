<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Auth;
use Session;
use ZipArchive;
use DB;
use Storage;
class productController extends Controller
{
    public static function getAll(){
        $products=DB::select("SELECT products.product_name AS name,
                                          products.product_id as id,
                                          ratings.rating as rating,
                                          products.product_price as price 
                                     FROM products,ratings 
                                    WHERE products.product_id=ratings.product_id
                                    GROUP BY id
                                    ORDER BY rand() 
                                    LIMIT 9");
        $products=json_decode(json_encode($products), true);
        $result = [];
        foreach ($products as $p){
            $r = $p;
            $i = self::getImages($p['id']);;
            $r['img'] = 'https://i.stack.imgur.com/Vkq2a.png';
            if(!empty($i[0])) $r['img'] = $i[0];
            $result[] = $r;
        }
        return $result;
    }

    public static function get($id){
        $result = DB::select("SELECT products.product_name AS name,
                                          products.product_id as id,
                                          products.product_description as details,
                                          products.product_price as price,
                                          ratings.rating as rating
                                     FROM products,ratings
                                    WHERE 
                                      products.product_id=$id 
                                      AND products.product_id=ratings.product_id
                                      LIMIT 1");
        $result=json_decode(json_encode($result), true);
        $result = $result[0];
        $result['img'] = '';
        return $result;
    }

    public static function getImages($id){
        $images = DB::table('images')
            ->where('product_id', $id)
            ->pluck('link');
        return $images;

    }

    public static function getImageIds($id){
        $images = DB::table('images')
            ->where('product_id', $id)
            ->pluck('image_id');
        return $images;

    }



    public function insertProduct($name,$category,$description,$price,$dev_id)
    {
        $id =DB::table('products')->insertGetId(
            ['product_name' => $name, 'product_description' => $description,
                'product_category'=>$category,'product_type' => 'Event',
                'product_price' => $price,'developer_id' => $dev_id]);

        DB::table('ratings')->insert(
            ['rating'=> 5, 'product_id' => $id,'user_id'=>2]
        );



        return $id;
    }
    public function validateUploadedProduct(Request $request)
    {

        if ($request->hasFile('zip')) {
            // your code here
            $file = $request->file('zip');

            //Display File Name
            echo 'File Name: '.$file->getClientOriginalName();
            echo '<br>';

            //Display File Extension
            echo 'File Extension: '.$file->getClientOriginalExtension();
            echo '<br>';
            echo $request->input('name');


            //Move Uploaded File
            $destinationPath = 'themes';
            //insert product entry into database
            //get product id in $fileid

            $id=productController::insertProduct($request->input('name'),$request->input('category'),$request->input('description'),$request->input('price'),1);
            $filename_without_zip=$id;
            $filename="".$id.".zip";

            $file->move($destinationPath,$filename);

            $zippath="themes/".$filename;

            $zip = new ZipArchive;

            $res = $zip->open($zippath);
            if ($res === TRUE) {
                $zip->extractTo("themes/demo/".$filename_without_zip."/");
                $zip->close();
                return redirect(route('product', $id));
            } else {
                return 'doh! 1';
            }

        }
        return "doh! 2";
    }

    public function uploadImage(Request $request)
    {

        if ($request->hasFile('image')) {
            // your code here
            $file = $request->file('image');

            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $link = url('images/'.$name);
            $product_id = $request->input('product_id');
            self::insertImage($link,$product_id);
            return redirect()->back();
        }
        return "doh! 2";
    }

    public static function insertImage($link, $product_id)
    {
        DB::table('images')->insert(['link' => $link, 'product_id' => $product_id]);
    }

    public function validateDownload($id)
    {
        if (1)//check if file exists
            return response()->file("themes/".$id.'.zip');
        return view('home');
    }

    public function edit(Request $r, $id){
        DB::table('products')
            ->where('product_id', $id)
            ->update([
                'product_name' => $r->input('name'),
                'product_description' => $r->input('description'),
                'product_price' => $r->input('price'),
            ]);
        return redirect()->back();
    }


    public function removeImage(Request $r, $id){
        DB::table('images')
            ->where('image_id', $id)
            ->delete();
        return redirect()->back();

    }
}