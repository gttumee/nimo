<?php

use App\Http\Controllers\common as ControllersCommon;
use App\Models\Common;
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
Route::get('/about',[ControllersCommon::class,'about'])->name('about');
Route::get('/jlpt',[ControllersCommon::class,'jlpt'])->name('jlpt');
Route::get('/japanese',[ControllersCommon::class,'japanese'])->name('japanese');
Route::get('/kanji',[ControllersCommon::class,'kanjiIndex'])->name('kanjiIndex');
Route::get('/kanji-search',[ControllersCommon::class,'kanjiSearch'])->name('kanjisearch');
Route::get('/contact',[ControllersCommon::class,'contact'])->name('contact');
Route::post('/contact',[ControllersCommon::class,'contact'])->name('contact');
Route::get('/jmongolia',[ControllersCommon::class,'jmongolia'])->name('jmongolia');
Route::post('/jlpt-view/{id}',[ControllersCommon::class,'durem'])->name('jlpt-view');
Route::get('/jlpt-view/{id}',[ControllersCommon::class,'durem'])->name('jlpt-view');
Route::get('/search', [ControllersCommon::class, 'askServer'])->name('search');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';