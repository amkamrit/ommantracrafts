<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gallary;
use Image;
use File;

class GallaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Gallary=Gallary::all();
        return view('admins.Gallary.index')
        ->with('Gallary', $Gallary);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.Gallary.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Gallary = new Gallary;
        $Gallary->image_name=$request->image_name;
        
        if ($request->hasFile('image')) {

            $file=$request->file('image');
            $file_name=$request->image_name.'.'. $file->getClientOriginalExtension();
            $location=('galleryImage/' .$file_name);
            if ($file->getClientOriginalExtension() == 'gif') {
                    copy($file->getRealPath(), $location);
                }
                else{
            Image::make($file)->resize(1500, 1500)->save($location);
                }
            $Gallary->image=$file_name;
        }
                        

        $Gallary->save();
        return redirect()->route('Gallary.index', $Gallary->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Gallarys=Gallary::find($id);
         unlink("galleryImage/$Gallarys->image");
         $Gallarys->delete();
        
        $Gallary=Gallary::all();
        return view('admins.Gallary.index')
        ->with('Gallary', $Gallary);
        
    }
}
