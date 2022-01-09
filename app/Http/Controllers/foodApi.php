<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http;
use Illuminate\Routing;

class foodApi extends Controller
{
    public function getData()
    {
         return (["id"=>1,"item"=>"Burger"]);
     }
}
