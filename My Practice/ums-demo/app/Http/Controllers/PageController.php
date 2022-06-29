<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    function home(){
        $name = "Kajol";
        $profession = "Student";
        $address = "Bashundhara, dhaka";

        return view("home", 
        [
            "name"=>$name,
            "profession"=>$profession,
            "address"=>$address

        ]);
    }
}
