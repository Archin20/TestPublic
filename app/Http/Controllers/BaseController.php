<?php

namespace App\Http\Controllers;

use	App\Maintext;

class BaseController extends Controller
{
    public function getIndex(){
		$obj=Maintext::where('url','index')->first();
		//SELECT * FROM maintexts WHERE url='index' LIMIT 1
		//dd($obj);
		return view('index',compact('obj'));
	}
}
