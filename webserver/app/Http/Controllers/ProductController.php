<?php 
// namespace App\Http\Controllers;
class ProductController extends App\Http\Controllers\Controller{

  public function getIndex()
  {
    $products = Product::all();

    return View::make('product_list')->with('products',$products);

  }
}