<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Coupne;

class CoupneController extends Controller
{
    public function index(){
    	$coupnesItem=Coupne::all();
    	return view('admins.Coupne.index')->with('coupnesItems', $coupnesItem);
    	}
    public function create(){
    	return view('admins.Coupne.create');
    }	
    public function store(Request $request){
    	$coupnes=new Coupne;
    	$coupnes->name=$request->name;
    	$coupnes->price=$request->price;
    	$coupnes->type=$request->type;
    	$coupnes->expire_date=$request->expire_date;
    	$coupnes->note=$request->note;
        $coupnes->status=$request->status;
    	$coupnes->save();

    	$coupnesItem=Coupne::all();
    	return view('admins.Coupne.index')->with('coupnesItems', $coupnesItem);
    }
    public function edit($id){
    	$coupnes=Coupne::find($id);
    	return view('admins.Coupne.edit')->with('coupnes', $coupnes);
    }

    public function show(Request $request , $id){
        $coupnes=Coupne::find($id);
        $coupnes->name=$request->input('name');
        $coupnes->price=$request->input('price');
        $coupnes->type=$request->input('type');
        $coupnes->expire_date=$request->input('expire_date');
        $coupnes->status=$request->input('status');
        $coupnes->note=$request->input('note');

        $coupnes->save();
        $coupnesItem=Coupne::all();
        return view('admins.Coupne.index')->with('coupnesItems', $coupnesItem);
    }
    public function destroy($id){
        
        $coupne = Coupne::find($id);

        $coupne->delete();

        $coupnesItem=Coupne::all();
        return view('admins.Coupne.index')->with('coupnesItems', $coupnesItem);

    } 


}
