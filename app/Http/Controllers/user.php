<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    //
    public function submit(Request $request)
    {
        print_r($request->input());
    }
}
