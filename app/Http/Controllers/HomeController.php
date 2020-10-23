<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\User;
use App\Models\City;
use App\Models\Ad;
use App\Models\Division;
use Hash;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data['categories'] = $this->getCategories();
        $data['cities']     = $this->getCities();
        return view('home',compact('data'));
    }

    public function addAd(){
        return view('addAd');
    }

    public function adCreate(){
        $data['categories'] = $this->getCategories();
        $data['cities']     = $this->getCities();
        return view('adCreate',compact('data'));
    }

    public function adStore(Request $request){
       $input = $request->all();

       $rules = [
           'category'           => 'required',
           'sub_category'       => 'required',
           'city'               => 'required',
           'local_area'         => 'required',
           'title'              => 'required',
           'description'        => 'required',
           'price'              => 'required',
        ];
          // Validate 
         $validator = \Validator::make($request->all(), $rules);
         if($validator->fails()){
            return array('status' => 'error' , 'msg' => 'failed to add ad', '' , 'errors' => $validator->errors());
         }

        $Ad = new Ad;
        $Ad->category_id     = $input['category'];
        $Ad->sub_category_id = $input['sub_category'];
        $Ad->title           = $input['title'];
        $Ad->description     = $input['description'];
        $Ad->price           = $input['price'];
        $Ad->city_id         = $input['city'];
        $Ad->city_area_id    = $input['local_area'];
  
        if($Ad->save())
            return ['status'=>'success','message'=>__('Successfully added add')];
          else
            return ['status'=>'failed','message'=>__('Failed to add ad')];
    }

    public function myAds(){
        $data['user'] = User::find(auth::id());
        return view('myProfile',compact('data'));
    }

    public function updateProfile(Request $request){
       $input = $request->all();
       $id = auth::id();
       $rules = [
           'name'   => 'required',
           'email'  => 'required|string|email|max:255|unique:users,email,'.$id.',id,deleted_at,NULL',
           'phone'  => 'required|string|unique:users,phone,'.$id.',id,deleted_at,NULL',
        ];
          // Validate 
         $validator = \Validator::make($request->all(), $rules);
         if($validator->fails()){
            return array('status' => 'error' , 'msg' => 'failed to update profile', '' , 'errors' => $validator->errors());
         }

        $fileName = null;
        if ($request->hasFile('profile_image')) {
            $fileName = str_random('10').'.'.time().'.'.request()->profile_image->getClientOriginalExtension();
            request()->profile_image->move(public_path('images/profile/'), $fileName);
        }

        $User = User::find($id);
        $User->name    = $input['name'];
        $User->email   = $input['email'];
        $User->phone   = $input['phone'];
        $User->address = $input['address']; 

        if($fileName){
          $User->profile_image = $fileName;
        }
  
        if($User->save())
            return ['status'=>'success','message'=>__('Successfully updated profile')];
          else
            return ['status'=>'failed','message'=>__('Failed to update profile')];
    }

       public function changePassword(Request $request){
         $input    = $request->all();
         $rules = [
                   'old_password'      => 'required',
                   'new_password'      => 'min:6|required_with:confirm_password|same:confirm_password',
                   'confirm_password'  => 'required|min:6',
                  ];

           // Validate 
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails()){
            return ['status' => 'error' , 'msg' => __('failed to update password'), '' , 'errors' => $validator->errors()];
        }

        if (!(Hash::check($request->old_password, auth()->user()->password))) {
             return ['status' => 'failed' , 'message' => __('Your old password does not matches with the current password  , Please try again')];
        }
        elseif(strcmp($request->old_password, $request->new_password) == 0){
             return ['status' => 'failed' , 'message' => __('New password cannot be same as your current password,Please choose a different new password')];
        }

         $User  = User::find(auth::id());
         $User->password = Hash::make($input['new_password']);
         if($User->update()){
           return ['status' => 'success' , 'message' => __('Successfully updated password')];
        }
           return ['status' => 'failed' , 'message' => __('Failed to update password')];
     }

    public function getCategories(){
        return Category::whereNull('parent_id')->where('is_active','1')->orderBy('title','asc')->get();
    }

    public function getCities(){
        return City::where('is_active','1')->orderBy('title','asc')->get();
    }

}
