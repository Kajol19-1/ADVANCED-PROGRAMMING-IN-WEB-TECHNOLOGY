<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentcontroller extends Controller
{
    //
    function list()
    {
        $students = student::all();
        return view('students.list')->with('students',$students);
    } 
    function details(Request $req)
    {
        $students = student::where('s_id', '=', $req->s_id)
                                ->select('name','s_id','dob','email','phone')
                                ->first();
                                
        return view('students.details')
                    ->with('students', $students);
    }
   
    function create(){
        return view('students.create');
    }
    
    function createSubmit(Request $req){

        //$req->validate([],[]);
        $this->validate($req,
             [
                "name"=>"required|max:20|regex:^[a-zA-Z\s\.\-]+$^",
                "s_id"=>"required|regex:/^([0-5]{3}-[0-9]{2}-[1-3]{2})+$/i",
                "dob"=>"required|date|before:-18 years",
                "email"=>"required|regex:/^([0-9]{2}-[0-9]{5}-[1-3]{1})@student\.aiub\.edu+$/i",
                "phone"=>"required|regex:/^\+[8]{2}[0-9]{11}+$/i"
             ],
             [
                 "name.required"=> "Please provide the student name",
                 "name.max"=> "Name should not exceed 20 characters",
                 "s_id.regex"=>"Must id provide xxx-xx-xx formate",
                 "dob.date"=>"Date of birth must be 18 year old",
                 "email.regex"=>"Email must provide xx-xxxxx-x formate",
                 "phone.regex"=>"phone number must provide +88xxxxxxxxxxx formate "
             ]
            );

            $s1 = new student();
            $s1->s_id = $req->s_id;
            $s1->name = $req->name;
            $s1->dob = $req->dob;
            $s1->email= $req->email;
            $s1->phone= $req->phone;
            $s1->save(); //insert query will run

        return "Submitted with valid value";
    }
}
