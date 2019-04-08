<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\sub_categorie;
use App\Models\Review;
use App\Models\product_image;


class ProductDisplayByCategoryController extends Controller
{
    public function products($id, $name){

    $singleCategoryproduct =Product::where('categories_id', '=', $id)->paginate(4);
    $CategoryDescription=Category::where('id', '=' ,$id)->first();
	$category=Category::all();
    $subCategory=sub_categorie::all();

    	return view('Products.displayProduct')
    	->with('singleCategoryproduct',$singleCategoryproduct)
		->with('category',$category)
    	->with('subCategory',$subCategory)
        ->with('CategoryDescription', $CategoryDescription);
    }
     public function subProducts($id ,$name){

    $singleCategoryproduct =Product::where('sub_categories_id', '=', $id)->get();
    $CategoryDescription=sub_categorie::where('id', '=' ,$id)->first();
	$category=Category::all();
    $subCategory=sub_categorie::all();

    	return view('Products.displayProduct')
    	->with('singleCategoryproduct',$singleCategoryproduct)
		->with('category',$category)
        ->with('CategoryDescription', $CategoryDescription)
    	->with('subCategory',$subCategory);
    }
     public function productSingle($id ,$name){

    $singleproduct =Product::find($id);
   	$relatedProduct=Product::where('categories_id', '=', $singleproduct->categories_id)->paginate(4);
	$category=Category::all();
    $CategoryDescription=Category::where('id', '=' ,$singleproduct->categories_id)->first();
    $subCategory=sub_categorie::all();
    $review=Review::where('product_id', '=', $id)->paginate(100);
    $featureImage=product_image::where('products_id', '=', $id)->paginate(5);

    	return view('Products.detailProudct')
    	->with('singleproduct',$singleproduct)
		->with('category',$category)
		->with('subCategory',$subCategory)
		->with('relatedProduct',$relatedProduct)
		->with('featureImage', $featureImage)
        ->with('CategoryDescription', $CategoryDescription)
        ->with('review', $review);
    }
    public function review(Request $request){

        $review= new Review();
        $review->description=$request->comment;
        $review->product_id= $request->product_id;
        if (empty(Auth()->user)) {
            $review->user_name="ABC";
           
        }
        else{
             $review->user_name=Auth()->user();
        }
        $review->save();
        return back();

    }
}
