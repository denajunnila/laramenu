<?php

namespace App\Http\Controllers;
use DB;
use HTML;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;




class DatabaseController extends Controller
{
      public function home()
    {
        //Declare the database 'menu'; only get if type=cat; get items that meet criteria from database
    	$menu=DB::table('menu')->where('type', 'cat')->get();
        // send this to the welcome page with info in 'menu'
    	return view('welcome', compact('menu'));        

    } 

    public function item($id)
    {
        //Declare the database 'menu'; only get if menu->subcat_id='the current id' and type=item; get items that meet criteria from database
    	$menu=DB::table('menu')->where('subcat_id', $id)->where('type', 'item')->get();
        // send this to the item page with info in 'menu'
    	return view('item', compact('menu'));

    }
     public function subcat($id)
    {
        //Declare the database 'menu'; only get if menu->cat_id='the current id' and type=subcat; get items that meet criteria from database 
		$menu=DB::table('menu')->where('type', 'subcat')->where('cat_id', $id)->get();
        // send this to the item page with info in 'menu'
    	return view('subcat', compact('menu'));

    }


}







