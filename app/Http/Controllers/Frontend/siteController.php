<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\sub_categorie;
use App\Models\Bookupload;
use App\Models\Service;
use BD;
use App\Models\event;

class siteController extends Controller
{
    public function about(){
    	$category=Category::all();
    	$subCategory=sub_categorie::all();


    	return view('site/aboutus')

		->with('category',$category)
    	->with('subCategory',$subCategory);


    }

    public function contact(){

    	$category=Category::all();
    	$subCategory=sub_categorie::all();


    	return view('site/contactus')

		->with('category',$category)
    	->with('subCategory',$subCategory);

    }

    public function booksDisplay(){
        $book =Bookupload::all();
        $category=Category::all();
        $subCategory=sub_categorie::all();

        return view('site/books')

            ->with('blog',$book)
            ->with('category',$category)
            ->with('subCategory',$subCategory);
    }
    public function booksDetailDisplay($id){
        $book =Bookupload::find($id);
        $books =Bookupload::all();
        $category=Category::all();
        $subCategory=sub_categorie::all();

        return view('site/bookDetail')

            ->with('blogs',$book)
            ->with('blog',$books)
            ->with('category',$category)
            ->with('subCategory',$subCategory);
    }
    public function DetailSerives($id){

        $category=Category::all();
        $subCategory=sub_categorie::all();
        $service=Service::find($id);
        $allservice=Service::all();
        return view('Service/serviceDetail')
        ->with('allservice',$allservice)
        ->with('category',$category)
        ->with('subCategory',$subCategory)
        ->with('service', $service);
    }

        public function eventDisplay(){
        $event =event::all();
        $category=Category::all();
        $subCategory=sub_categorie::all();

        return view('event/event')

            ->with('blog',$event)
            ->with('category',$category)
            ->with('subCategory',$subCategory);
    }
    public function eventDetailDisplay($id){
        $event =event::find($id);
        $events =event::all();
        $category=Category::all();
        $subCategory=sub_categorie::all();

        return view('event/eventDetail')

            ->with('blogs',$event)
            ->with('blog',$events)
            ->with('category',$category)
            ->with('subCategory',$subCategory);
    }
      public function termAndCondition(){
        $category=Category::all();
        $subCategory=sub_categorie::all();

        return view('site/termAndCondition')

            ->with('category',$category)
            ->with('subCategory',$subCategory);
    }
}
