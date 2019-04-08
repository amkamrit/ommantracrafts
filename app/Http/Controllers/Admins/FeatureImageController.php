<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product_detail;
use App\Models\Product;
use App\Models\product_image;
use Image;


class FeatureImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::all();
        return view('admins.featureImage.create')->with('product' ,$product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admins.subcategory.create');
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

        $product_image = new product_image;
        $product_image->products_id = $request->products_id;
        if ($request->hasFile('feature_image')) {

            $file=$request->file('feature_image');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $location=('productImage/' .$file_name);
            Image::make($file)->resize(800, 800)->save($location);
            $product_image->feature_image=$file_name;
        }
        $product_image->save();
        //Redirect Other page
        return redirect()->route('product.index',$product_image->id);
    }
    public function show($id)
    {
        $review =Review::find($id);
        return view('admins.review.show')->withreview($review);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $subcategory =sub_categorie::find($id);
        // return view('admins.subcategory.edit')->withsubcategory($subcategory);
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
        // $subcategory = sub_categorie::find($id);
        
        // $subcategory->main_category_id = $request->input('main_category_id');
        // $subcategory->sub_category_name = $request->input('sub_category_name');
        // $subcategory->sub_category_picture=$request->input('sub_category_picture');
        // $subcategory->sub_category_description=$request->input('sub_category_description');

        // $subcategory->save();

        // // redirect with flash data to posts.show
        // return redirect()->route('subcategory.index',$subcategory->id);
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
}
