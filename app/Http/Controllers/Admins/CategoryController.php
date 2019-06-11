<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Image;
use DB;

class CategoryController extends Controller
{
    public function index(){
        $category=DB::table('categories')->paginate(8);
    	// $category = Category::all();

    	return view('admins.category.index')->with('category', $category);
    }
    public function show($id){

    	$category = Category::find($id);
    	return view('admins.category.show')->with('category', $category);
    }
    public function edit($id){

    	$category = Category::find($id);

    	return view('admins.category.edit')->with('category', $category);
    }
    public function update(Request $request, $id){

    	 $categorys = Category::find($id);
    	 
        
        $categorys->category_name = $request->input('category_name');
        $categorys->meta_keywords=$request->input('meta_keywords');
        $categorys->meta_description=$request->input('meta_description');
        $categorys->category_description = $request->input('category_description');
        $categorys->category_picture=$request->input('category_picture');

        $categorys->save();

        // redirect with flash data to posts.show
        $category=DB::table('categories')->paginate(8);
        return view('admins.category.index')->with('category',$category);
         //return redirect()->route('category.index',$category->id);
    }
    public function create(){

        return view('admins.category.create');

    }
    public function store(Request $request){

        $categorys = new Category;
        $categorys->category_name = $request->category_name;
        $categorys->meta_keywords=$request->meta_keywords;
        $categorys->meta_description=$request->meta_description;
        $categorys->category_description = $request->category_description;
        $categorys->category_picture = $request->category_picture;
        if ($request->hasFile('category_picture')) {
            $file=$request->file('category_picture');
            $filename=time().'.'. $file->getClientOriginalExtension();
            $location=('categoty_image/' . $filename);
            Image::make($file)->save($location);
            $categorys->category_picture=$filename;
        }
        $categorys->save();
        //Redirect Other page
        return redirect()->route('category.index',$categorys->id);
    }
    public function destroy($id){

     $categorys = Category::find($id);

        $categorys->delete();

       $category=DB::table('categories')->paginate(8);
        return view('admins.category.index')->with('category', $category);
    }
}
