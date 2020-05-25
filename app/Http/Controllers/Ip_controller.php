<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ip_controller extends Controller
{
    public function view()
    {
    	return view("find_ip");
    }
    public function details(Request $request)
    {
    	return request('ip_address');
		$data = \Location::get(request('ip_address'));
		
    	return view('details',compact('data'));
       
    }
}
