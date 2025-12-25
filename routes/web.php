<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function(){
    return '<h1>Available Jobs</h1>';
})->name('jobs');

Route::get('/header', function(){
    return response('<h1>Hello World</h1>', 200)->header('Content-Type', 'text/plain');
});

Route::get('/json', function(){
    return response()->json(['name' => 'John Doe'])->cookie('name', 'Brad');
});

Route::get('/download', function(){
    return response()->download(public_path('favicon.ico'));
});

Route::get('/read-cookie', function(Request $request){
    $cookieValue = $request->cookie('name');
    return response(['cookie' => $cookieValue]);
});

Route::get('/test2', function(){
    return 'TEST@2';
});
