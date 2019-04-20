<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\shipping_countrys;

class shippingAddressController extends Controller
{
	    /**

    * @return \Illuminate\Support\Collection

    */

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

    public function import() 

    {

        Excel::import(new UsersImport,request()->file('file'));

           

        return back();

    }
    
}
