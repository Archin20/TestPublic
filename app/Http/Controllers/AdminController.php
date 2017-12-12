<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class AdminController extends Controller
{
	public function __construct(){
	$this->middleware('admin');
	}
	
    public function getIndex(Request $request){
		if($request->products >0){
		return view ('form_for_product');
		}else {
			return view();
		}
	}
	
}
