<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MultidependencyController extends Controller
{
    public function index()
    {
        $divisions = Division::get();
        return view('multi-dependency',compact('divisions'));
    }

    public function districts(Division $id)
    {
        return $id->load('districts');
    }
    public function upazilas(District $id)
    {
        return $id->load('upazilas');
    }
}
