<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    
public function getAll(){
	$all=Product::all();
	return view('products',compact('all'));
}
public function getOne($id){
	
}
}
