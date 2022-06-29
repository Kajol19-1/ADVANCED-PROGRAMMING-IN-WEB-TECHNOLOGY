<?php

namespace App\Http\Controllers;
use App\Models\content;

use Illuminate\Http\Request;

class contentController extends Controller
{
    //
    function list()
    {
        $contents = content::all();
        return view('list')->with('contents',$contents);
    } 

    function details(Request $req)
    {
        $contents = content::where('content_id', '=', $req->content_id)
                                ->select('content_id','title','description','image','video','audio','genre','language','country','release_date','runtime','director','cast','user_id')
                                ->first();
                                
        return view('details')
                    ->with('contents', $contents);
    }

    function create()
    {
        return view('create');
    }

    function edit(Request $req)
    {
        $content_id=$req->content_id;

        $content =content::where('content_id',$content_id)->first();
        return view('edit')->with('content',$content);
    }

    function editSubmit(Request $req)
    {
        $c1= content::where('content_id',$req->content_id)->first();
        $c1->content_id = $req->content_id;
       $c1->title = $req->title;
       $c1->description = $req->description;

        ////////////////////////For image upload//////////////////////

        if($req->hasFile('image'))
        {
           // return "ok";
        $name=time()."_".$req->file('image')->getClientOriginalName();
        $req->file('image')->storeAs('viewImages',$name,'public');
        $c1['image'] = $name;
        //return "upload successfull";
        }
        else{
            unsent($c1['image']);
        }

       //////////////// //////For video upload/////////////////////////

        if($req->hasFile('video'))
        {
           // return "ok";
        $name=time()."_".$req->file('video')->getClientOriginalName();
        $req->file('video')->storeAs('uploads',$name,'public');
        $c1['video'] = $name;
        //return "upload successfull";
        }

        /////////////////////////For audio Upload/////////////

        if($req->hasFile('audio'))
        {
           // return "ok";
        $name=time()."_".$req->file('audio')->getClientOriginalName();
        $req->file('audio')->storeAs('audiofiles',$name,'public');
        $c1['audio'] = $name;
        //return "upload successfull";
        }

        $c1->genre = $req->genre;
        $c1->language = $req->language;
        $c1->country = $req->country;
        $c1->release_date= $req->release_date;
        $c1->runtime = $req->runtime;
        $c1->director = $req->director;
        $c1->cast = $req->cast;
        $c1->user_id = $req->user_id;
        $c1->update();
        return redirect->route('list');
    }

    function upload(Request $req)
    {
        $this->validate($req,
        [
                'content_id'=>'required',
                'title'=>'required',
                'description'=>'required',
                'image'=>'required|mimes:php,pdf,docx,xlsx,xlx,jpg',
                'video'=>'required|mimes:mp4',
                'audio'=>'required|mimes:mp3',
                'genre'=>'required',
                'language'=>'required',
                'country'=>'required',
                'release_date'=>'required',
                'runtime'=>'required',
                'director'=>'required',
                'cast'=>'required',
                'user_id'=>'required'

            ]
        );
        $c1 = new content();

        $c1->content_id = $req->content_id;
        //$s1->sid = $req->sid;
       // $s->$content_id=$req->content_id ;
       $c1->title = $req->title;
       $c1->description = $req->description;

        ////////////////////////For image upload//////////////////////

        if($req->hasFile('image'))
        {
           // return "ok";
        $name=time()."_".$req->file('image')->getClientOriginalName();
        $req->file('image')->storeAs('viewImages',$name,'public');
        $c1['image'] = $name;
        //return "upload successfull";
        }

       //////////////// //////For video upload/////////////////////////

        if($req->hasFile('video'))
        {
           // return "ok";
        $name=time()."_".$req->file('video')->getClientOriginalName();
        $req->file('video')->storeAs('uploads',$name,'public');
        $c1['video'] = $name;
        //return "upload successfull";
        }

        /////////////////////////For audio Upload/////////////

        if($req->hasFile('audio'))
        {
           // return "ok";
        $name=time()."_".$req->file('audio')->getClientOriginalName();
        $req->file('audio')->storeAs('audiofiles',$name,'public');
        $c1['audio'] = $name;
        //return "upload successfull";
        }

        $c1->genre = $req->genre;
        $c1->language = $req->language;
        $c1->country = $req->country;
        $c1->release_date= $req->release_date;
        $c1->runtime = $req->runtime;
        $c1->director = $req->director;
        $c1->cast = $req->cast;
        $c1->user_id = $req->user_id;


        $c1->save();
        return "upload successfull";
    }
}
