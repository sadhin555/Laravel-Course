<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{

    public function __construct()
    {
    //   $this->middleware('check_age:20');
    }
    public function firstMethod()
    {
        return "First Method";
    }

    public function user($name)
    {
        return "hello $name";
    }
}
