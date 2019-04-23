<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class shipping_countrys extends Model
{
       /**

    * @param array $row

    *

    * @return \Illuminate\Database\Eloquent\Model|null

    */

    public function model(array $row)

    {

        return new shipping_countrys([

            'country'     => $row[0],

            'zone'    => $row[1], 

        ]);

    }
}
