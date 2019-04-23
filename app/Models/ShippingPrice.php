<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingPrice extends Model
{
          /**

    * @param array $row

    *

    * @return \Illuminate\Database\Eloquent\Model|null

    */

    public function model(array $row)

    {

        return new ShippingPrice([

            'weight'     => $row[0],

            '1'    => $row[1], 
            '2'    => $row[1], 
            '3'    => $row[1], 
            '4'    => $row[1], 
            '5'    => $row[1], 
            '6'    => $row[1], 
            '7'    => $row[1], 
            '8'    => $row[1], 

        ]);

    }
}
