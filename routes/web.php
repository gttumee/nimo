<?php

use App\Http\Controllers\common as ControllersCommon;
use App\Http\Controllers\gojapan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[ControllersCommon::class,'index'])->name('index');
Route::post('/',[ControllersCommon::class,'index'])->name('index');
Route::get('about',[ControllersCommon::class,'about'])->name('about');
Route::get('japanese',[ControllersCommon::class,'japanese'])->name('japanese');
Route::get('kanji',[ControllersCommon::class,'kanjiIndex'])->name('kanjiIndex');
Route::get('kanji-search',[ControllersCommon::class,'kanjiSearch'])->name('kanjisearch');
Route::get('contact',[ControllersCommon::class,'contact'])->name('contact');
Route::post('contact',[ControllersCommon::class,'contact'])->name('contact');
Route::get('jmongolia',[ControllersCommon::class,'jmongolia'])->name('jmongolia');
Route::post('jlpt-view/{id}',[ControllersCommon::class,'durem'])->name('jlpt-view');
Route::get('jlpt-view/',[ControllersCommon::class,'durem'])->name('jlpt-view');
Route::post('hozon',[ControllersCommon::class,'durem'])->name('hozon');
Route::get('hozon',[ControllersCommon::class,'remember'])->name('hozon');
Route::get('search', [ControllersCommon::class, 'askServer'])->name('search');
Route::get('job',[gojapan::class,'job'])->name('job');
Route::get('study',[gojapan::class,'study'])->name('study');
Route::get('travel',[gojapan::class,'travel'])->name('travel');
Route::get('event',[gojapan::class,'event'])->name('event');

//ажил сургууль аялал эвэнтийн шинээр бүртгэл орж ирэх хэсэг 
Route::post('jobrequest',[gojapan::class,'jobrequest'])->name('jobrequest');
Route::get('rirekshoview',[gojapan::class,'rirekshoview'])->name('rirekshoview');

//facebook login 
Route::prefix('facebook')->name('facebook.')->group( function(){
    Route::get('auth', [FaceBookController::class, 'loginUsingFacebook'])->name('login');
    Route::get('callback', [FaceBookController::class, 'callbackFromFacebook'])->name('callback');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');