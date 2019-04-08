<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderList;
use unserialize;

class OrderListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $OrderList=OrderList::all();
        $OrderList->transform(function($OrderLists, $key){
            $OrderLists->productList=unserialize($OrderLists->productList);
            return $OrderLists;
            
        });
        return view('admins.OrderList.index')
        ->with('OrderList' ,$OrderList);
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
    }
    public function show($id)
    {
        $OrderList =OrderList::find($id);
        return view('admins.OrderList.show')->with('OrderList', $OrderList);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $OrderList =OrderList::find($id);
        return view('admins.OrderList.edit')->with('OrderList', $OrderList);
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
        $OrderList = OrderList::find($id);
        $OrderList->status=$request->input('status');

        $OrderList->save();

        // redirect with flash data to posts.show
        return redirect()->route('OrderList.index',$OrderList->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $OrderList = OrderList::find($id);
        $OrderList->delete();

        $OrderList=OrderList::all();
        $OrderList->transform(function($OrderLists, $key){
            $OrderLists->productList=unserialize($OrderLists->productList);
            return $OrderLists;
            
        });
        return view('admins.OrderList.index')
        ->with('OrderList' ,$OrderList);


    }
    
}
