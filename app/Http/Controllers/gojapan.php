<?php

namespace App\Http\Controllers;

use App\Models\gojapan as ModelsGojapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class gojapan extends Controller
{
    public function job(){
        return view('job');
    }
    
    public  function jobrequest(Request $request){
       
        $dir = 'images';
        // sampleディレクトリに画像を保存
        $file = $request->file('image');
        $orignal_filename = time().$file->getClientOriginalName();
        Storage::put('image/'.$orignal_filename, $file);
        $user = new ModelsGojapan();
        $user->images = $orignal_filename;
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
        $cvdata= ModelsGojapan::where('id','5')->get();
        return view('rirekshoview',compact('cvdata'));
    }
}