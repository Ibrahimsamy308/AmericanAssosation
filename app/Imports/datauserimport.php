<?php

namespace App\Imports;

use App\Models\datausers;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;



class datauserimport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    
    public function model(array $row)
    {
      $data = new datausers([
            "fname"=>$row['fname'],
            "lname"=>$row['lname'],
            "pay"=>$row['pay'],
        ]);

        return $data;
    }
    
}
