<?php

namespace App\Http\Controllers;
use App\Models\content;

use Illuminate\Http\Request;

class contentController extends Controller
{
    //
    function test_file()
    {
        return view('testfile');
    }
    function upload(Request $request)
    {
        $request->validate(
            [
                'video'=>'required|mimes:mp4',
                'image'=>'required|mimes:php,pdf,docx,xlsx,xlx,jpg',
                'audio'=>'required|mimes:mp3'

            ]
        );
        $s = new content();
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
        $s->save();
        return "upload successfull";
    }
}
