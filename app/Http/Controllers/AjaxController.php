<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\City;
use App\Models\Field;

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

     public function fields($id){
          try {
          $data = Category::find($id)->fields()->orderBy('title','asc')->whereNull('deleted_at')->get();
          return ['status'=>'success','message'=>'success','data'=>$data];
          } catch (\Exception $e) {
               return ['status'=>'success','message'=>'Something went wrong'];
          }
     }

     public function field($id){
         try {
          $data =  Field::find($id);
          return ['status'=>'success','message'=>'success','data'=>$data];
          } catch (\Exception $e) {
               return ['status'=>'success','message'=>'Something went wrong'];
          }
     }


}
