<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgriculturalRetailerController extends Controller
{ 

	* Display a listing of the resource.
    *
    * @return Response
    */
   public function index() {
 
         $agriculturalretailers = AgriculturalRetailer::where('user_id','=',Auth::user()->id)->get();
return $agriculturalretailers;
   }
 
   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store() {
      $agriculturalretailer = new AgriculturalRetailer(Request::all());
      $agriculturalretailer->user_id = Auth::user()->id;
      $agriculturalretailer->save();
      return $agriculturalretailer;
   }
 
}
 