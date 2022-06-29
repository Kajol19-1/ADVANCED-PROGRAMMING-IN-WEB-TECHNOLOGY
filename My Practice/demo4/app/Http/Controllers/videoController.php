<?php

namespace App\Http\Controllers;
use App\Models\video;

use Illuminate\Http\Request;

class videoController extends Controller
{
    //
    function index()
    {
        return view ("index");
    }
    function upload(Request $request)
    {
        $request->validate(
            [
                'video'=>'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
            ]
            );

            $file=$request->file('video');
            $file->move('upload',$file->getClientOriginalName());
            $file_name=$file->getClientOriginalName();
            $insert= new video();
            $insert->video=$file_name;
            $insert->save();
            

    }
}
