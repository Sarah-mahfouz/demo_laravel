<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReigistertionController;
use App\Http\Controllers\TemplateController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [ReigistertionController::class,'showFrom']);
Route::post('/register', [ReigistertionController::class,'store']);
Route::get('/SUCCESS',function(){
    return "Reigistertion success";
});