<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
Use App\Main_cat;
Use App\Main_ad;

class AddController extends Controller
{
    public function index()
    {
    	$data['categories'] = Main_cat::get();
    	return view('add', $data);	
    }

    public function save(Request $request)
    {
    	$this->validate($request, [
        	'title' => 'bail|required',
        	'description' => 'bail|required',
        	'price' => 'bail|integer|required',
        	'tags' => 'bail|required',
        	'categories' => 'bail|required',
        	'contact' =>	'bail|required',
        	'password' =>	'required',
    	]);

    	echo $request->title;
    	echo $request->description;
    	print_r( $request->categories );


    }



}
