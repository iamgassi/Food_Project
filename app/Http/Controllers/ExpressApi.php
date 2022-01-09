<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class ExpressApi extends Controller
{
     function getData(){
    //    return Http::get('http://localhost:5000/data');
        return Http::get('http://localhost:5000/data');
    }
}
