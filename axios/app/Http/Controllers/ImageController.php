<?php

namespace App\Http\Controllers;

use App\Actions\File\File;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ImageController extends Controller
{
    public function index()
    {
        return view('multi-image');
    }


    public function upload(Request $request)
    {
        //dd($request->images);
        foreach($request->images as $image ){
            Image::create(["name" => File::upload($image,"multiple")]) ;
         }
    }
}
