<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\registermail;
use App\Models\rememberedkanji;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Stichoza\GoogleTranslate\GoogleTranslate;

class common extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $resultList;

     public function index(Request $request)
    {
        if($request->input('email')){
            $subscription = new registermail();
            $subscription->email = $request->input('email');
            $subscription->save();
           return back()->with('flash_messages', '投稿が完了しました');
        }
        return view('index');
       
    }
    public function about()
    {
        return view('about');
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
            $result = $request->input('search');
            $lastResult = Http::get("http://beta.jisho.org/api/v1/search/words?keyword=".$result)->json();
            $resp = $lastResult['data'];
            $translate = new GoogleTranslate('en');
            $convert = function($data) use($translate){
                return $translate->setSource("en")->setTarget("mn")->translate($data);
            };
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
    }

    public function jmongolia(){
        return view('jmongolia');
    }

    public function durem(Request $request)
    {
        $result = DB::select("SELECT
        kanjis.dummy_id,
        kanjis.en,kanjis.mon,rememberedkanjis.delete_flag,
        hanzud->>'jlpt' as jlpt,
        hanzud->>'kanji' as kanji,
        hanzud->>'on_readings' as on_readings,
        hanzud->>'kun_readings' as kun_readings, 
        hanzud->>'meanings' as meanings , 
        hanzud->>'stroke_count' as stroke_count 
        FROM kanjis
        left join rememberedkanjis on rememberedkanjis.kanji_id = kanjis.dummy_id
        WHERE (hanzud->>'jlpt')::INT = $request->id
		order by rememberedkanjis.updated_at desc");
        return view('jlpt-view', compact('result'));
        }
        
        public function remember(Request $request){
        if($kanji_id=$request->input('kanji_id')){
            rememberedkanji::updateOrCreate(['kanji_id' => $kanji_id], 
            ['delete_flag' =>  $request->kanji,'user_id' => 2]
            );
        }
            return back();   
        }
}