<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Bookupload;
use App\Models\Blog;
use App\Models\Category;
use App\Models\sub_categorie;
use DB;
use App\Models\Service;
use App\Models\Slider;
use App\Models\SliderTwo;


class IndexController extends Controller
{
    public function index(){

    //$product = DB::table('products')->paginate(8);
    $product = Product::inRandomOrder()->paginate(8);
    $recentproduct=DB::table('products')->orderBy('created_at', 'DESC')->paginate(8);
    //$recentproduct = DB::table('products')->paginate(8);
	$Cproduct =Product::where('categories_id', '=', 2)->paginate(2);
	$Coproduct =Product::where('categories_id', '=', 7)->paginate(2);
	$Co4product =Product::where('categories_id', '=', 6)->paginate(2);
	$Co5product =Product::where('categories_id', '=', 1)->paginate(2);
    $service=DB::table('services')->paginate(10);
    $hotProduct=DB::table('products')->orderBy('created_at', 'AESC')->paginate(8);
    $slider= Slider::all();
    $sliderTwo=SliderTwo::all();
    $book=DB::table('bookuploads')->paginate(4);
	// $book=Bookupload::all();
	$blog=DB::table('blogs')->paginate(4);
    
     $category=Category::all();
    $subCategory=sub_categorie::all();
    	return view('index') 
    ->with('product',$product)
    ->with('book',$book)
    ->with('blog', $blog)
    ->with('Cproduct', $Cproduct)
    ->with('Co4product',$Co4product)
    ->with('Co5product',$Co5product)
    ->with('Coproduct', $Coproduct)
    ->with('category',$category)
    ->with('service',$service)
    ->with('slider',$slider)
    ->with('recentproduct', $recentproduct)
    ->with('hotProduct', $hotProduct)
    ->with('sliderTwo', $sliderTwo)
    ->with('subCategory',$subCategory);
    } 
    public function service(){
        $service=DB::table('services')->paginate(4);
        return view('image_carousel')->with('service', $service);
    }
}
