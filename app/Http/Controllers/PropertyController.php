<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class PropertyController extends Controller
{
    public function home(){

        $properties = Property::orderBy('created_at', 'desc')->paginate(2);
        return view ('home' , compact('properties'));
        
    }
    
    public function index(){ 
    $properties = Property::orderBy('created_at', 'desc')->paginate(2);
    return view ('property.index' , compact('properties'));
    }

    public function show(Property $property){

        //$properties = $Property->orderBy('created_at' , 'Desc')->paginate(2);
        return view('property.show' , compact('property'));
        
    }
}


