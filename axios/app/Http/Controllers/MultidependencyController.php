<?php

namespace App\Http\Controllers;

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
}
