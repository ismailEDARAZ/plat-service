<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationController extends Controller
{

    public function show($id)
    {
    	return view('destination.show');
    }
    
}
