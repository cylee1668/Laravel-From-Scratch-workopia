<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'index']);

Route::get('/jobs/share', [JobController::class,'share']);

Route::resource('jobs', JobController::class);

