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
    	$menu=DB::table('menu')->where('type', 'cat')->get();
    	return view('welcome', compact('menu'));        

    } 

    public function item($id)
    {
    	$menu=DB::table('menu')->where([ ['subcat_id', $id], ['type', 'item'] ])->get();

    	return view('item', compact('menu'));

    }
     public function subcat($id)
    {

		$menu=DB::table('menu')->where([ ['cat_id', $id], ['type', 'subcat'] ])->get();
    	return view('subcat', compact('menu'));

    }


}







