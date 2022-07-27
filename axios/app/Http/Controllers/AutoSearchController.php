<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AutoSearchController extends Controller
{
    function index(){
        return view('auto-search');
    }
}
