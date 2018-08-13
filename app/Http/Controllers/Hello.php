<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hello extends Controller
{

    public function index()
    {
        return view('hello', ['name' => '']);
    }

    public function show($name)
    {
        return view('hello', ['name' => $name]);
    }

}
