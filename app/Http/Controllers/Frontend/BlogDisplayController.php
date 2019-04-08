<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\sub_categorie;


class BlogDisplayController extends Controller
{
    public function blogDisplay(){
    	$blog =Blog::all();
    	$category=Category::all();
    	$subCategory=sub_categorie::all();

    	return view('Blogs.blogs')

    		->with('blog',$blog)
    		->with('category',$category)
    		->with('subCategory',$subCategory);
    }
    public function blogDetailDisplay($id){
    	$blogs =Blog::find($id);
    	$blog =Blog::all();
    	$category=Category::all();
    	$subCategory=sub_categorie::all();

    	return view('Blogs.blogDetail')

    		->with('blogs',$blogs)
    		->with('blog',$blog)
    		->with('category',$category)
    		->with('subCategory',$subCategory);
    }
     public function service(){
        $blog =Blog::all();
        $category=Category::all();
        $subCategory=sub_categorie::all();

        return view('Service.services')

            ->with('blog',$blog)
            ->with('category',$category)
            ->with('subCategory',$subCategory);
    }
    public function serviceDetailDisplay($id){
        $blogs =Blog::find($id);
        $blog =Blog::all();
        $category=Category::all();
        $subCategory=sub_categorie::all();

        return view('Blogs.blogDetail')

            ->with('blogs',$blogs)
            ->with('blog',$blog)
            ->with('category',$category)
            ->with('subCategory',$subCategory);
    }

}
