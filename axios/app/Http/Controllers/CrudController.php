<?php

namespace App\Http\Controllers;

use App\Actions\File\File;
use App\Models\Crud;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CrudController extends Controller
{
    public function index()
    {
        return view('crud.index');
    }

    public function getData()
    {
        return response()->json([
            "data" => Crud::latest()->get()
        ]);
    }

    public function show(Crud $curd)
    {
        return $curd;
    }

    public function delete(Crud $crud)
    {
        $file = $crud->image;
        File::deleteFile($file);
        return $crud->delete();
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => ['required','unique:cruds,name'],
            "image" => ['required','mimes:png,jpg'],
        ]);

        $crud = Crud::create([
            "name" => $request->name,
            "image" => File::upload($request->image,"crud")
        ]);

        if($crud){
            return true;
        }else{
            return false;
        }
    }
}
