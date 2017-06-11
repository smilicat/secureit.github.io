<?php

namespace App\Http\Controllers;

use App\Property;
use App\User;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $properties = Property::all();
        return view('property', ['properties'=>$properties ]);
    }
    public function view_property($id){
        $users = User::find($id);
        $properties = $users->properties()->get();


}
    public function show($slug)
    {
        $property = Property::findBySlug($slug);
        return view('property.show',['property'=>$property]);
    }
}
