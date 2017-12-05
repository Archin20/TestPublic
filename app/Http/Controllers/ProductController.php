<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\catalog;
class ProductController extends Controller
{
    
public function getAll(){
	$all=Product::all();
	return view('products',compact('all'));
}
public function getOne($id){
	$product=product::find($id);
	return view('product',compact('product'));
}
public function getCat($id=0){
	$cat=Catalog::find($id);
	return view('catalog',compact('cat'));
	//dd($cat);
	//$products=Product::where('catalog_id',$id)->get();
	//->all();
	// ->paginate();
	//->first();
	//$cat->name
}
}
