<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class Companies extends Controller
{
    //
   /* function save(Request $req)
    {
        $company = new Company;
        $company->name=$req->name;
        $company->adress=$req->adress;
        $company->save();
       // print_r($req->input());
    }*/
    function update(Request $req)
    {
       // print_r($req->input());
      echo Company::where('name','samsung')
       ->update(['adress'=>'usa']);
    }
}
