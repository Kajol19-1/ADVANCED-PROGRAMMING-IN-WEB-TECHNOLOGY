<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class companyController extends Controller
{
    //
    function product(){
        
        $products = array();
        for($i=1;$i<=10;$i++){
            $product = array(
                "id"=>$i,
                "name"=>"product $i",
                "price"=>"100tk"
            );
            $products[] = (object)$product;
        }

        return view('company.product')
               ->with('products',$products);
    }

                function teams()
               {
                   return view('company.teams');
               }
                function about()
               {
                   return view('company.about');
               }
                function home()
               {
                   return view('company.home');
               }
               function contact()
               {
                   return view('company.contact');
               }
    }
    //
   


