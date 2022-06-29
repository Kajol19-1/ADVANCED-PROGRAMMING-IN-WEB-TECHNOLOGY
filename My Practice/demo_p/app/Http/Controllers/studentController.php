<?php

namespace App\Http\Controllers;
use App\Models\content;


use Illuminate\Http\Request;

class studentController extends Controller
{
    //
    function list()
    {
        $contents = content::all();
        return view('contents.list')->with('contents',$contents);
    } 
    function details(Request $req)
    {
        $contents = content::where('content_id', '=', $req->content_id)
                                ->select('content_id','title','description','image','genre','language','country','release-date','runtime','director','cast','userid')
                                ->first();
                                
        return view('contents.details')
                    ->with('contents', $contents);
    }
   
    function create(){
        return view('contents.create');
    }
    function home(){
        return view('layouts.home');
    }
    
    function createSubmit(Request $req){

        //$req->validate([],[]);
        $this->validate($req,
        [
            "content_id"=>"required",
            "title"=> "required",
            "description"=>"required",
            'video'=>'required|mimes:mp4',
            'image'=>'required|mimes:php,pdf,docx,xlsx,xlx,jpg',
            'audio'=>'required|mimes:mp3',
            "genre"=>"required",
            "language"=>"required",
            "Country"=>"required",
            "release_date"=>"required",
            "runtime"=>"required",
            "director"=>"required",
            "cast"=>"required",
            "user_id"=>"required"

         ]
            );
          


            
            $c1 = new content();
            $c1->content_id = $req->content_id;
            $c1->title = $req->title;
            $c1->description = $req->description;
            $c1->genre = $req->genre;
            $c1->language = $req->language;
            $c1->country = $req->country;
            $c1->release_date = $req->release_date;
            $c1->runtime = $req->runtime;
            $c1->director = $req->director;
            $c1->cast = $req->cast;
            $c1->user_id = $req->user_id;
            //////////////// //////For video upload/////////////////////////

        if($request->hasFile('video'))
        {
           // return "ok";
        $name=time()."_".$request->file('video')->getClientOriginalName();
        $request->file('video')->storeAs('uploads',$name,'public');
        $s['video'] = $name;
        //return "upload successfull";
        }
////////////////////////For image upload//////////////////////

        if($request->hasFile('image'))
        {
           // return "ok";
        $name=time()."_".$request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('viewImages',$name,'public');
        $s['image'] = $name;
        //return "upload successfull";
        }

        /////////////////////////For audio Upload/////////////

        if($request->hasFile('audio'))
        {
           // return "ok";
        $name=time()."_".$request->file('audio')->getClientOriginalName();
        $request->file('audio')->storeAs('audiofiles',$name,'public');
        $s['audio'] = $name;
        //return "upload successfull";
        }

            $c1->save(); //insert query will run

        return "Submitted with valid value";
    }

    
}
