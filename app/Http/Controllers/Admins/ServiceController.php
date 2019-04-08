<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Image;


class ServiceController extends Controller
{
    public function index(){
    	$service= Service::all();

    	return  view('admins.Service.index')
    	->with('service', $service);
    }
    public function create(){

    	return view('admins.Service.create');

    }
    public function store(Request  $request){

    	$service= new Service;

    	$service->title=$request->title;
    	$service->content= $request->content;

        if ($request->hasFile('image')) {

            $file=$request->file('image');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $location=('serviceImage/' .$file_name);
            Image::make($file)->resize(800, 500)->save($location);
            $service->image=$file_name;
        }
    	$service->save();

    	return redirect()->route('Service.index',$service->id);
    }
    public function show($id){

        $service=Service::find($id);
        return view('admins.Service.show')->with('service', $service);
    }
    public function edit($id){

        $service=Service::find($id);
        return view('admins.Service.edit')->with('service', $service);
    }
    public function update(Request $request, $id){

        $service = Service::find($id);
        
        $service->title = $request->input('title');
        $service->content = $request->input('content');
        // if ($request->hasFile('image')) {

        //     $file=$request->file('image');
        //     $file_name=time().'.'. $file->getClientOriginalExtension();
        //     $location=public_path('serviceImage/' .$file_name);
        //     Image::make($file)->resize(800, 500)->save($location);
        //     $service->image=$file_name;
        // }

        $service->save();
        $service= Service::all();
        return view('admins.Service.index')
        ->with('service', $service);
    }
    public function destroy($id){


         $service = Service::find($id);

         $service->delete();

         $service= Service::all();

        return  view('admins.Service.index')
        ->with('service', $service);

    }
}
