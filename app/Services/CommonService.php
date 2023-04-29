<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;
use Stichoza\GoogleTranslate\GoogleTranslate;

class CommonService
{
    public static function jisho($searchItem)
    {
        $lastResult = Http::get("http://beta.jisho.org/api/v1/search/words?keyword=".$searchItem)->json();
        $resp = $lastResult['data'];
        $translate = new GoogleTranslate('en');
            $convert = function($data) use($translate){
                return $translate->setSource("en")->setTarget("mn")->translate($data);
            };
            return [$resp, $convert];        
    }
}