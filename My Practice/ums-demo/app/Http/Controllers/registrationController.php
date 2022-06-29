<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrationController extends Controller
{
    //
    function registration()
    {
        return view("registration");
        function register (request $request)
        {
            $output = "<h1> Submitted </h1>";
            $output.= "Name:".$request ->name;
            $output.="<br>Profession:".$request->profession;
            $output.="<br>Address:".$request->address;
            return $output;
        }
    }
}
