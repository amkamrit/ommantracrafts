<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\sub_categorie;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class customerRegisterController extends Controller
{
    public function index(){
    	
    $category=Category::all();
    $subCategory=sub_categorie::all();
    return view('frontends.register')
    ->with('category',$category)
    ->with('subCategory',$subCategory);
    }
    
    public function store(Request $request){

    	$register = new Customer;
        $register->fname = $request->fname;
        $register->lname = $request->lname;
        $register->email = $request->email;
        $register->country = $request->country;
        $register->city = $request->city;
        $register->ContactNumber = $request->ContactNumber;
        $passwords=Hash::make($request->password);
        $register->password = $passwords;
        $register->verifyTocken=Str::random(40);
        $register->save();
        //Redirect Other pages
        $category=Category::all();
    $subCategory=sub_categorie::all();
    return view('welcome')
    ->with('category',$category)
    ->with('subCategory',$subCategory);

    }
}
