<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
  
     public function index()
     {
         $services = service::orderBy('id')->get();;
     
         return view('admin.pages.service.show',compact('services'));
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
     
         return view('admin.pages.service.add');
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',

         ]);
        $model = new Service;
        
        if($request->hasFile('image')){
            $file = $request->file('image');
            $image = uniqid().'.'.$file->guessExtension();
            $image_path = $file->move(public_path().'/admin/images/service/',$image);

            $model->image = $image;

        }

        $model->name=$request->get('name');
        $model->description=$request->get('description');
        $model->save();
        if($model){

        return redirect()->back()->with('message', 'Services Record Added Successfully!');

        }

     
     }
 
     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         $form = service::findOrFail($id);
 
         return response()
         ->json(['form' => $form]);
     }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         $row = service::findOrFail($id);
       
         return view('Admin.pages.service.add',compact('row'));
    
     }
 
     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     { 
         $this->validate($request, [
            'name' => 'required',
            'description' => 'required',

     ]);
    $model = new Service;
    
    if($request->hasFile('image')){
        $file = $request->file('image');
        $image = uniqid().'.'.$file->guessExtension();
        $image_path = $file->move(public_path().'/admin/images/service/',$image);

        $model->image = $image;

    }

    $model->name=$request->get('name');
    $model->description=$request->get('description');
    $model->save();
    if($model){

    return redirect()->back()->with('message', 'Services Record Added Successfully!');

    }

 
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         //
     }
 
     public function validation($request){
         return $request->validate([
             'name' => 'required',
             
         ]);
     }
}
