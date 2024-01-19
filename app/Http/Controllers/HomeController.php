<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home1');
    }
    public function about()
    {
        return view('about1');
    }
    public function test($id = 0)
    {
        $name = 'IK2';
        return view('test', ['nama' => $name, 'id' => $id]);
    }
}
