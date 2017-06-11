<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class SecController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	$properties = Property::all();
    	return view('index', ['properties'=>$properties ]);
    }
}
