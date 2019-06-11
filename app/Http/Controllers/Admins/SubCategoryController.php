<?php

namespace App\Http\Controllers\Admins;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\sub_categorie;
use Image;
use App\Models\Category;
use DB;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $subcategory =sub_categorie::all();
        $subcategory=DB::table('sub_categories')->paginate(8);
        return view('admins.subcategory.index')->withsubcategory($subcategory);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('admins.subcategory.create')->with('category',$category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate form
        $this ->Validate($request , array(
            // 'question' =>'required| max:300'
        ));
        //Store database
        $subcategory = new sub_categorie;
        $subcategory->main_category_id = $request->main_category_id;
        $subcategory->sub_category_name = $request->sub_category_name;
        $subcategory->meta_keyword=$request->meta_keyword;
        $subcategory->meta_description=$request->meta_description;
        $subcategory->sub_category_picture = $request->sub_category_picture;
        $subcategory->sub_category_description = $request->sub_category_description;
        if ($request->hasFile('sub_category_picture')) {
            $file=$request->file('sub_category_picture');
            $filename=time().'.'. $file->getClientOriginalExtension();
            $location=public_path('categoty_image/' . $filename);
            Image::make($file)->save($location);
            $subcategory->file=$filename;
        }
        $subcategory->save();
        //Redirect Other page
        return redirect()->route('subcategory.index',$subcategory->id);
        // return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcategory =sub_categorie::find($id);
        return view('admins.subcategory.show')->withsubcategory($subcategory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::all();
        $subcategory =sub_categorie::find($id);
        return view('admins.subcategory.edit')
        ->withsubcategory($subcategory)
        ->withcategory($category);
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
        $subcategory = sub_categorie::find($id);
        
        $subcategory->main_category_id = $request->input('main_category_id');
        $subcategory->sub_category_name = $request->input('sub_category_name');
        $subcategory->meta_keyword=$request->input('meta_keyword');
        $subcategory->meta_description=$request->input('meta_description');
        $subcategory->sub_category_picture=$request->input('sub_category_picture');
        $subcategory->sub_category_description=$request->input('sub_category_description');

        $subcategory->save();

        // redirect with flash data to posts.show
        return redirect()->route('subcategory.index',$subcategory->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = sub_categorie::find($id);
        
        $subcategory->delete();

        $subcategory=DB::table('sub_categories')->paginate(8);
        return view('admins.subcategory.index')->withsubcategory($subcategory);

    }
}
