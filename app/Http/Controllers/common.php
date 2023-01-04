<?php

namespace App\Http\Controllers;

use App\Models\c;
use App\Models\contact;
use App\Models\kanjis;
use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Throwable;

class common extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function jlpt(Request $request)
    {
        return view('jlpt');
    }
    public function japanese()
    {
        return view('japanese');
    }
    public function kanjiIndex(){
        return view('kanjisearch');
    }
    
    public function kanjiSearch(Request $request)
    {
        
            $translate = new GoogleTranslate('en');
            $convert = function($data) use($translate){
                return $translate->setSource("en")->setTarget("mn")->translate($data);
            };
            $result = $request->input('search');
            $lastResult = Http::get("http://beta.jisho.org/api/v1/search/words?keyword=".$result)->json();
            $resp = $lastResult['data'];
         return view('kanjisearch',compact('resp','result','convert'));
            
    }
    public function contact(Request $request)
    {      
    if(count($request->all()) >= 1)
{

    $hobloo = new contact();
    $hobloo->name = $request->name;
    $hobloo->email = $request->email;
    $hobloo->phone = $request->phone;
    $hobloo->post = $request->post;
    $hobloo->save();
    session()->flash('flash_message', 'таны хүсэлт амжилттай илгээгдлээ');

    return view('contact');

}
else {
    redirect();
}
return view('contact');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $post = $request->post;
    }

    public function jmongolia(){
        return view('jmongolia');
    }

    public function durem(Request $request){   
        $result = DB::select("SELECT 
        hanzud->>'jlpt' as jlpt,
        hanzud->>'kanji' as kanji,
        hanzud->>'on_readings' as on_readings,
        hanzud->>'kun_readings' as kun_readings, 
        hanzud->>'meanings' as meanings , 
        hanzud->>'stroke_count' as stroke_count 
        FROM kanjis
        WHERE (hanzud->>'jlpt')::INT = $request->id");
        return view('jlpt-view', compact('result'));
    }
}