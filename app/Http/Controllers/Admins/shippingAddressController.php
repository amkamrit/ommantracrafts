<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\shipping_countrys;
use DB;
use Excel;

class shippingAddressController extends Controller
{
	    /**

    * @return \Illuminate\Support\Collection

    */
	public function index(){

		return view('admins.shippingAddress.index');
	}

    public function importExportView()

    {

       return view('import');

    }

   

    /**

    * @return \Illuminate\Support\Collection

    */

    public function export() 

    {

        return Excel::download(new UsersExport, 'users.xlsx');

    }

   

    /**

    * @return \Illuminate\Support\Collection

    */

    public function import(Request $request) 

    {
        $request->validate([

            'file' => 'required'

        ]);

        $path = $request->file('file')->getRealPath();

        $data = Excel::load($path)->get();

 

        if($data->count()){

            foreach ($data as $key => $value) {

            $arr[] = ['country' => $value->country, 'zone' => $value->zone];
               
            }

            if(!empty($arr)){

                 shipping_countrys::insert($arr);

            }

        }

 

        return view('admins.shippingAddress.index')->with('success', 'Insert Record successfully.');

    }
public function importprice(Request $request) 

    {
        $request->validate([

            'file' => 'required'

        ]);

        $path = $request->file('file')->getRealPath();

        $data = Excel::load($path)->get();

 

        if($data->count()){

            foreach ($data as $key => $value) {

            $arr[] = ['country' => $value->country, 'zone' => $value->zone];
               
            }

            if(!empty($arr)){

                 shipping_countrys::insert($arr);

            }

        }

 

        return view('admins.shippingAddress.index')->with('success', 'Insert Record successfully.');

    }

    
}
