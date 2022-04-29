<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MalikController extends Controller
{
    public function index(){
        return view('MALIK.index');
    }
    public function index_next(){
        return view('MALIK.index_next');
    }
}
