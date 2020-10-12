<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::orderBy('created_at', 'desc')->get();
        //->paginate(2);
    
        return view ('property.index' , compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('property.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $property = new Property;
        
        $property->title = $request->title;
        $property->description = $request->description;
        $property->location = $request->location;
        $property->area = $request->area;
        $property->rooms = $request->rooms;
        $property->baths = $request->baths;
        $property->price = $request->price;
        $property->downpayment = $request->downpayment;
        $property->installments = $request->installments;
        
        

        $images = $request->file('files');
        $names = [];
        foreach ($images as $image){
        $fileName= $image->getClientOriginalName();
        
        $explode= explode(".",$fileName );
        $fileActualExt = strtolower(end($explode));
        $fileActualName= $explode[0];
        $fileUniqueName = $fileActualName.'kamel.'.$fileActualExt;
        $image->storeAs('img', $fileUniqueName , 'public');
        array_push($names, $fileUniqueName);

        }
        $property->carousal_images = json_encode($names);

        $image = $request->file;
        $fileName= $image->getClientOriginalName();
        
        $explode= explode(".",$fileName );
        $fileActualExt = strtolower(end($explode));
        $fileActualName= $explode[0];
        $fileUniqueName = $fileActualName.'kamel.'.$fileActualExt;
        $image->storeAs('img', $fileUniqueName , 'public');
      
        $property->main_image = $fileUniqueName;

        $property->save();

        return redirect('/properties')->with('message' , 'property posted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //$properties = $Property->orderBy('created_at' , 'Desc')->paginate(2);
        
    $images = json_decode($property->carousal_images , true);
    
    
    
	
       return view('property.show' , compact('property' , 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        $images = json_decode($property->carousal_images , true);
        return view('property.edit' , compact('property' , 'images'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        $title = $request->title;
        $description = $request->description;
        $location = $request->location;
        $area = $request->area;
        $rooms = $request->rooms;
        $baths = $request->baths;
        $price = $request->price;
        $downpayment = $request->downpayment;
        $installments = $request->installments;
        //$images = $request->images;

   
       $property->update(['title'=> $title,'description'=>$description ,'location'=>$location , 
       'area'=>$area , 'rooms'=>$rooms , 'baths'=>$baths , 'price'=>$price , 'downpayment'=>$downpayment
        , 'installments'=>$installments]);
       
       return redirect()->back()->with();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Property $property)
    {
        $property->delete();
        return redirect('properties/');
    }
}
