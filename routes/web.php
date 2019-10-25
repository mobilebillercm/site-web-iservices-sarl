<?php

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

use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    return view('welcome', ['url'=>$request->url()]);
});
Route::get('/home', function (Request $request) {
    return view('welcome', ['url'=>$request->url()]);
});

Route::get('/our-services', function (Request $request) {
    return view('our-services', ['url'=>$request->url()]);
});

Route::get('/our-partners', function (Request $request) {
    return view('our-partners', ['url'=>$request->url()]);
});


Route::get('/team', function (Request $request) {
    return view('team', ['url'=>$request->url()]);
});

Route::get('/portfolio', function (Request $request) {
    return view('portfolio', ['url'=>$request->url()]);
});

Route::get('/contact-us', function (Request $request) {
    return view('contact-us', ['url'=>$request->url()]);
});

Route::post('/contact-us', 'ContactUs@contactUs');



Route::get('/testimonial', function (Request $request) {
    return view('testimonial', ['url'=>$request->url()]);
});



Route::get('/privacy-policy', function (Request $request) {
    return view('privacy-policy', ['url'=>$request->url()]);
});
/*Route::get('/article-headline', function (Request $request) {
    return view('article', ['articleid'=>$request->get('articleid')]);
});*/










Route::get('/iservices', function (Request $request) {
    return view('iservices');
});


Route::get('get-ip-details', function (Request $request){
    $ip = $request->ip();
    $data = (new \Stevebauman\Location\Location())->get('216.58.204.238');
    dd($data);
});


