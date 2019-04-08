<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Image;
use App\Models\sub_categorie;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider =Slider::all();
        return view('admins.Slider.index')
        ->with('slider',$slider);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategory=sub_categorie::all();
        return view('admins.Slider.create')->with('subcategory', $subcategory);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Slider = new Slider;
        $Slider->title=$request->title;
        $Slider->sub_categories_id=$request->sub_categories_id;
        // if ($request->hasFile('image')) {
        //     $file=$request->file('image');
        //     $file_name=time().'.'. $file->getClientOriginalExtension();
        //     $request->image->storeAs('public/Slider',$file_name);
        //     $Slider->image=$file_name;
        // }
         if ($request->hasFile('image')) {

            $file=$request->file('image');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $location=('sliderImage/' .$file_name);
            Image::make($file)->resize(800, 500)->save($location);
            $Slider->image=$file_name;
        }

        $Slider->save();
        return redirect()->route('Slider.index', $Slider->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Slider =Slider::find($id);
        return view('admins.subcategory.show')->with('Slider',$Slider);
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
        $Slider =Slider::find($id);

        $Slider->delete();

         $slider =Slider::all();
        return view('admins.Slider.index')
        ->with('slider',$slider);


    }
}
