<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numberOfProperties = Property::all()->count();
        
        if($numberOfProperties<3){
            $properties = Property::all();
        }
        else{

            $properties = Property::all()->random(3);

        }
        
        return view ('home' , compact('properties'));
    }

    public function admin()
    {
        
        return view ('/admin');
    }
}
