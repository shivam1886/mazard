<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ad extends Model
{
     use SoftDeletes;

     public function user(){
       return $this->hasOne('App\User','id','user_id');
     }

     public function category(){
       return $this->hasOne('App\Models\Category','id','category_id');
     }

     public function subCategory(){
       return $this->hasOne('App\Models\Category','parent_id','category_id');
     }

}
