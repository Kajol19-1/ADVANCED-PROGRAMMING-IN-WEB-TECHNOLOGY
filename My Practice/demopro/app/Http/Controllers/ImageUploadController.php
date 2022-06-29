<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostImage;

class ImageUploadController extends Controller
{
    //
      //Add image
      public function addImage(){
        return view('add_image');
    }
    

    public function viewImage(){
        $imageData= PostImage::all();
        return view('view-image', compact('imageData'));
    }


    public function storeImage(Request $request){
        $data= new PostImage();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
        }
        $data->save();
       return redirect()->route('images.view');
       
    }
}
