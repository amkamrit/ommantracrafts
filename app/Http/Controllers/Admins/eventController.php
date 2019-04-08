<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\event;
use Image;

class eventController extends Controller
{
    public function index(){

    	$event=event::all();
    	return view('admins.event.index')->with('event',$event);
    }
    public function create(){

    	return view('admins.event.create');
    }
    public function store(Request $request){
    	$event= new event;

    	$event->event_title=$request->event_title;
    	$event->event_content= $request->event_content;

        if ($request->hasFile('event_image')) {

            $file=$request->file('event_image');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $location=('serviceImage/' .$file_name);
            Image::make($file)->resize(800, 500)->save($location);
            $event->event_image=$file_name;
        }
    	$event->save();

    	return redirect()->route('event.index',$event->id);

    }
    public function show($id){
    	$event=event::find($id);

    	  return view('admins.event.show')->with('event', $event);
    }
    public function edit($id){

    	$event=event::find($id);
    	return view('admins.event.edit')->with('event',$event);
    }
    public function update(Request $request, $id)
    {
        $event = event::find($id);
        
        $event->event_title = $request->input('event_title');
        $event->event_content = $request->input('event_content');
        // if ($request->hasFile('event_image')) {

        //     $file=$request->file('event_image');
        //     $file_name=time().'.'. $file->getClientOriginalExtension();
        //     $location=('serviceImage/' .$file_name);
        //     Image::make($file)->resize(800, 500)->save($location);
        //     $event->event_image=$file_name;
        // }

        $event->save();

        // redirect with flash data to posts.show
        return redirect()->route('event.index',$event->id);
    }
    public function destroy($id){
        $event = event::find($id);

        $event->delete();

        $event=event::all();
        return view('admins.event.index')->with('event',$event);

    }
}
