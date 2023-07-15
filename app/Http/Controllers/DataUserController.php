<?php

namespace App\Http\Controllers;

use App\Imports\datauserimport;
use App\Models\datausers;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;



class DataUserController extends Controller
{
   public function importexcel(Request $request)
   {
      $request->validate([
         
         'file' => 'mimes:xlsx,xls',

     ]);
   //   dd($request->file);

      Excel::import(new datauserimport,$request->file);        
      $alldata = datausers::all();
      //  return view('showdata',compact($alldata));
      return view('showdata',compact('alldata'));
    
   }

   public function updatepayment(Request $request,$id){
      //  return $id;
      return $request;
   }
}
