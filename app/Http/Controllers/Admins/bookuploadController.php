<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\product_image;
use App\Models\Bookupload;
use Image;

class bookuploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book=Bookupload::all();
        return view('admins.Bookupload.index')->with('book' ,$book);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admins.Bookupload.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

        $Bookupload = new Bookupload;
        $Bookupload->book_name = $request->book_name;
        $Bookupload->short_description=$request->short_description;
        $Bookupload->long_description=$request->long_description;

         if ($request->hasFile('pdf_file')) {
            $file=$request->file('pdf_file');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $request->pdf_file->storeAs('public/upload',$file_name);
            $Bookupload->pdf_file=$file_name;
        }

        if ($request->hasFile('image')) {

            $file=$request->file('image');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $location=('bookImage/' .$file_name);
            Image::make($file)->resize(800, 800)->save($location);
            $Bookupload->image=$file_name;

        }

        $Bookupload->save();
        //Redirect Other page
        return redirect()->route('Bookupload.index',$Bookupload->id);
    }
    public function show($id)
    {
        $Bookupload =Bookupload::find($id);
        return view('admins.Bookupload.show')->with('Bookupload',$Bookupload);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $Bookupload =Bookupload::find($id);
         return view('admins.Bookupload.edit')->with('Bookupload',$Bookupload);
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
         $Bookupload = Bookupload::find($id);
        
        $Bookupload->book_name = $request->input('book_name');
        $Bookupload->short_description=$request->input('short_description');
        $Bookupload->long_description=$request->input('long_description');
        if ($request->hasFile('pdf_file')) {
            $file=$request->file('pdf_file');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $request->pdf_file->storeAs('public/Bookupload',$file_name);
            $Bookupload->pdf_file=$file_name;
        }

        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $request->image->storeAs('public/Bookupload',$file_name);
            $Bookupload->image=$file_name;
        }
        $Bookupload->save();
        //Redirect Other page
        return redirect()->route('Bookupload.index',$Bookupload->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Bookupload = Bookupload::find($id);
        $Bookupload->delete();

        $book=Bookupload::all();
        return view('admins.Bookupload.index')->with('book' ,$book);

        
    }
}
