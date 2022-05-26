<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class chuckAPI extends Controller
{
    //
    function getData()
    {
        $collection = http::get("http://api.icndb.com/jokes/random/20");
        return view('jokes',['collection'=>$collection['value']]);
    }

}
