<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Main_cat as Main_cat;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function Dashboard()
    {
    	return view('admin/dashboard');
    }
    
    public function Add()
    {
    	echo "add zar";
    }

    public function Adlist()
    {
    	return view('admin/adlist');
    }
    public function Category()
    {
        $data['categories'] = Main_cat::get();
        return view('admin/category', $data);
    }
    function createcategory(Request $request)
    {

        $category = new Main_cat;

        $category->name = $request->name;
        $category->parent_id = $request->parentcategory;

        $category->save();

        return redirect('vip-admin/category');
    }
}
