<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\book;

class HomeController extends Controller
{
    public function index(){
        $data = book::all();
        return view('home.index',compact('data'));
    }
}
