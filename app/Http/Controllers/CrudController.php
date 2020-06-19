<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\crud;

class CrudController extends Controller
{
    public function create(){
    	return view('crud/create');
    }

    public function index()
    {
    	$data = crud::all();
    	return view('crud.index', compact('data')); 

    }


    public function insert(Request $request)
    {
    	
    	
    	
        $file = $request->file('image');
        // dd($file);
        // exit;

        $filename = 'image'.time().'.'.$request->image->extension();
         // dd($file);
         // exit;

        $destination=storage_path('../public/upload');
        $file->move($destination,$filename);
        $path="/".$filename;

        $data = new crud;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobileno = $request->mobileno;
        $data->gender =$request->gender;
        $data->qualification = implode(',', $request->qualification);
        $data->address = $request->address;
        $data->image =$path;
        // print_r($data);
        // die;
         $data->save();

       if($data)
        {
            return redirect('/crud')->with('message','Post sucessfully Added'); //flash message session
        }
    }
   
    public function show($id){
        $crud = crud::find($id);
        return view('crud.show', compact('crud'));
    }

    public function edit($id){
        $crud = crud::find($id);
        return view('crud.edit', compact('crud'));
    }

    public function update( Request $request){

         $crud = crud::find($request->id);
         $crud->name = $request->name;
         $crud->email  = $request->email;
         $crud->mobileno = $request->gender;
         $crud->qualification = implode(',' , $request->qualification);
         $crud->address = $request->address;
         if($request->hasFile('image'))
         {
            $file=$request->file('image');
            $filename = 'image'.time().'.'.$request->image->extension();
            $destination = storage_path('../public/upload');
            $file->move($destination,$filename);
            $path = "/".$filename;


       
        $crud->image = $path;
        $updated = $crud->update();

        if($updated){
            return redirect('/crud')->with('message', 'crud sucessfully updated');
        }
    }


    else{
         $crud = crud::find($request->id);
        $crud->name = $request->name;
        $crud->email  = $request->email;
        $crud->mobileno = $request->gender;
        $crud->qualification = implode(',' , $request->qualification);
        $crud->address = $request->address;
        $crud->image = $request->path;
        $updated = $crud->update();

         if($updated){
            return redirect('/crud')->with('message', 'crud sucessfully updated');
        }
    }
}



      public function delete($id = null){
        Crud::where(['id'=>$id])->delete();
        return redirect('/crud')->with('message', 'record deleted sucessfully!');

   }
    
}
