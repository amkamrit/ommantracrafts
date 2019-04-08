<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product_detail;
use App\Models\Product;
use App\Models\Customer;
use App\Models\OrderList;
use App\Models\Category;
use App\Models\Review;
use DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Customer= Customer::orderByRaw('RAND()')->take(7)->get();
        $OrderList= OrderList::orderByRaw('RAND()')->take(7)->get();
        $Category= Category::orderByRaw('RAND()')->take(7)->get();
        $revies=Review::orderByRaw('RAND()')->take(7)->get();

        $product=Product::orderByRaw('RAND()')->take(7)->get();
        return view('admin')
        ->with('product',$product)
        ->with('Customer', $Customer)
        ->with('OrderList', $OrderList)
        ->with('Category', $Category)
        ->with('revies',$revies);
    }
}
