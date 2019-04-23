<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\shipping_countrys;
use DB;
use Excel;
use App\Models\ShippingPrice;
class shippingAddressController extends Controller
{
	    /**

    * @return \Illuminate\Support\Collection

    */
	public function index(){

        $data = DB::table('shipping_countrys')->paginate(15);

		return view('admins.shippingAddress.index')->with('data', $data);
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

            'fileprice' => 'required'

        ]);

        $path = $request->file('fileprice')->getRealPath();

        $data = Excel::load($path)->get();

 

        if($data->count()){

            foreach ($data as $key => $value) {

            $arr[] = ['weight' => $value->weight, 'zone1' => $value->zone1, 'zone2' => $value->zone2, 'zone3' => $value->zone3,'zone4' => $value->zone4, 'zone5' => $value->zone5, 'zone6' => $value->zone6, 'zone7' => $value->zone7, 'zone8' => $value->zone8];
            }

            if(!empty($arr)){

                 ShippingPrice::insert($arr);

            }

        }

 

        return view('admins.shippingAddress.index')->with('success', 'Insert Record successfully.');

    }
    public function displayprice($id){
        $zoneCode=0;
    if ($id==1) {
        $zoneCode="zone1";
    }
    elseif ($id==2) {
        $zoneCode="zone2";
    }
     elseif ($id==3) {
        $zoneCode="zone3";
    }
     elseif ($id==4) {
        $zoneCode="zone4";
    }
     elseif ($id==5) {
        $zoneCode="zone5";
    }
     elseif ($id==6) {
        $zoneCode="zone6";
    }
     elseif ($id==7) {
        $zoneCode="zone7";
    }
    else{

        $zoneCode="zone8";
    }
    $data = Gallery::where('user_id', $userId)->paginate(10);
        $data = DB::table('shipping_countrys')->paginate(15);

        return view('admins.shippingAddress.view')->with('data', $data);
    }

    
}
