<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Ramani\Contact\Http\Controllers\ContactController;


Route::group(['namespace'=>'Ramani\Contact\Http\Controllers\ContactController'],function(){
    Route::get('contact',[ContactController::class,'index'])->name('contact');

Route::post('contact',[ContactController::class,'send']);

});



?>