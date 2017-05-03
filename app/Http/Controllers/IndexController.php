<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        
        $title = 'Dashboard';
        return view('index.index', compact('title'));
    }
}
