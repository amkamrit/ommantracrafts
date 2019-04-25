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
        $zoneid=$id;

        $data = DB::table('shipping_prices')->paginate(15);

        return view('admins.shippingAddress.view')
        ->with('zoneid', $zoneid)
        ->with('data', $data);
    }
    public function countryEdit($id) {
        $country =shipping_countrys::find($id);
        return view('admins.shippingAddress.countryEdit')->with('country', $country);
    }   

     public function countryupdate(Request $request ,$id) {
        $updateCountry= shipping_countrys::find($id);
        $updateCountry->country=$request->country;
        $updateCountry->zone=$request->zone;

       $data = DB::table('shipping_countrys')->paginate(15);

        return view('admins.shippingAddress.index')->with('data', $data);
    } 

       public function ShippingPriceEdit($id) {
        $countryPrice =ShippingPrice::find($id);
        return view('admins.shippingAddress.ShippingPriceEdit')->with('countryPrice', $countryPrice);
    } 
}
