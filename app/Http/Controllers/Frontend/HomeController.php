<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\UserService;
use App\Models\User;
use App\Models\BookNow;

class HomeController extends Controller
{
   public function index(){
      return view('frontend.pages.index');
   }
   public function about(){
      return view('frontend.pages.about');
   }
   public function services(){

      $services = service::orderBy('id')->get();;
     
      return view('frontend.pages.services',compact('services'));
   } 
   public function servicesdetail($id){
      $servicedetail = service::with(['user_service.user'])->where('id',$id)->first();
      return view('frontend.pages.servicedetail',compact('servicedetail'));
   }
   public function freelancer(){
 
      $users = user::with(['user_services.services'])->where('type',0)->orderby('updated_at','desc')->get();
      return view('frontend.pages.freelancer',compact('users'));
   }
     public function freelancerdetail($id){
 
      $freelancer = user::where('id',$id)->first();
      
     
      return view('frontend.pages.freelancerdetail',compact('freelancer'));
     }
     public function setting(){
 
       $users = user::with(['user_services.services'])->where('id',auth()->user()->id)->first();
      //  dd($users);
     
     
      return view('frontend.pages.setting',compact('users'));
     }
     public function setting_update(Request $request,$id)
     { 
      // dd("test");
   //       $this->validate($request, [
   //          'name' => 'required',
   //          'description' => 'required',

   //   ]);
      $model = user::findOrFail($id);

      $model->name=$request->get('name');
      $model->description=$request->get('description');
      $model->save();

    foreach($request->user_services as $service){
      $user_service = UserService::findOrFail($service['id']);
      $user_service->price = $service['price'];
      $user_service->status = $service['status'];
      $user_service->save();
    }
    if($model){
      return redirect()->back()->with('message', 'Services Record Added Successfully!');
   }

 
   }

   public function book_now(Request $request,$id){
      $model = new BookNow;
      $model->booking_user_id = $id;
      $model->user_id = auth()->user()->id;
      $model->save();
      return redirect()->back();
   }

  
}
