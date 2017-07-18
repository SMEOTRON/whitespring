<?php

namespace whitespring\Http\Controllers;

use DB;

use Illuminate\Http\Request;

use whitespring\Http\Requests;

class ProductController extends Controller
{
    //
    public function createProductForm(){
      return view('createProductForm');
    }

    public function singleProduct(Request $req,$id){
      $product=DB::select("Select * from products where id=?",[$id]);
      return json_encode($product);
    }
    public function deleteProduct($id){
      DB::delete("Delete from products where id=?",[$id]);
      return '[{"status":"success","comment":"product deleted successfully"}]';
    }
    public function createProduct(Request $request){
      $product_name=$request->input('product_name');
      $product_price=(int)$request->input('product_price');
      $product_color=$request->input('product_color');

      DB::insert("insert into products(product_name,product_price,product_colors) values(?,?,?)",[$product_name,$product_price,$product_color]);
      return '[{"status":"success","comment":"product added successfully"}]';
    }
    public function products(){

      $products=DB::select("Select * from products");
      return json_encode($products);
    }
}
