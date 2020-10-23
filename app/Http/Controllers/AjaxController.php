<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\City;

class AjaxController extends Controller
{
     public function subCategory($id){
     	try {
	     $data = Category::find($id)->subCategories()->orderBy('title','asc')->whereNull('deleted_at')->get();
	     return ['status'=>'success','message'=>"success",'data'=>$data];
     	} catch ( \Exception $e) {
     	 return ['status'=>'failed','message'=>'Something went wrong'];
     	}
     }

     public function cityArea($id){
     	try {
	     $data = City::find($id)->areas()->orderBy('title','asc')->whereNull('deleted_at')->get();
	     return ['status'=>'success','message'=>"success",'data'=>$data];
     	} catch ( \Exception $e) {
     	 return ['status'=>'failed','message'=>'Something went wrong'];
     	}
     }
}
