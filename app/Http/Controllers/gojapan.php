<?php

namespace App\Http\Controllers;

use App\Models\gojapan as ModelsGojapan;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class gojapan extends Controller
{
    public function job(){
        return view('job');
    }
    
    public  function jobrequest(Request $request){

        $file = $request->file('image');
        $orignal_filename = time().$file->getClientOriginalName();
        $file->storeAs('test', 'specific_name.jpg', 'public');
        $user = new ModelsGojapan();
        $user->images = $orignal_filename;
        $user->address = $request->address;
        $user->firstname = $request->firstname;
        $user->lastname =  $request->lastname;
        $user->age =  $request->age;
        $user->gender =  $request->gender;
        $user->japanese_level =  $request->japanese_level;
        $user->school = $request->school;
        $user->job =  $request->job;
        $user->email =  $request->email;
        $user->phone =  $request->phone;
        $user->other =  $request->other;
        $user->save();
        
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

    public function rirekshoview(){
        $cvdata=ModelsGojapan::orderBy('created_at', 'desc')->first();
        $translate = new GoogleTranslate('en');
        $convert = function($data) use($translate){
            return $translate->setSource("mn")->setTarget("ja")->translate($data);
        };
        return view('rirekshoview',compact('cvdata','convert'));
    }
}