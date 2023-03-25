<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gojapan extends Controller
{
    public function job(){
        return view('job');
    }
    
    public function study(){
        return view('study');
    }

    public function travel(){
        return view('travel');
    }
    
    public function event(){
        return view('event');
    }
}