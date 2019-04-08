<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product_detail;
use App\Models\Product;

class product_detailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::all();
        $Product_detail=Product_detail::all();
        return view('admins.product_detail.index')
        ->with('Product_detail', $Product_detail);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $product=Product::all();
        $Product_detail=Product_detail::all();
        return view('admins.product_detail.create')
        ->with('Product_detail', $Product_detail)
        ->with('product',$product);
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

        $product_detail = new Product_detail;
        $product_detail->products_id = $request->products_id;
        $product_detail->product_long_description = $request->product_long_description;
        $product_detail->product_code = $request->product_code;
        $product_detail->product_sell_price = $request->product_sell_price;
        $product_detail->product_minimum_sell_number = $request->product_minimum_sell_number;
        $product_detail->product_type = $request->product_type;
        $product_detail->slog = $request->slog;
        $product_detail->sell_option = $request->sell_option;
        $product_detail->save();
        //Redirect Other page
        return redirect()->route('product.index',$product_detail->id);
    }
    public function show($id)
    {
        $product_detail =Product_detail::find($id);
        return view('admins.product_detail.show')->with('product_detail',$product_detail);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $product_detail =Product_detail::find($id);
         return view('admins.product_detail.edit')
         ->with('product_detail',$product_detail);
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
        $product_detail = Product_detail::find($id);
        $product_detail->product_long_description = $request->input('product_long_description');
        $product_detail->product_code = $request->input('product_code');
        $product_detail->product_sell_price = $request->input('product_sell_price');
        $product_detail->product_minimum_sell_number = $request->input('product_minimum_sell_number');
        $product_detail->product_type = $request->input('product_type');
        $product_detail->slog = $request->input('slog');
        $product_detail->sell_option = $request->input('sell_option');
        $product_detail->save();
        // redirect with flash data to posts.show
        return redirect()->route('product_detail.index', $product_detail->id);
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
