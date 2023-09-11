<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YahooController;

Route::get('/show',[YahooController::class,'show'])->name('show-show');//here the route is being created for the controller 
Route::get('/view/{id}',[YahooController::class,'view'])->name('view-show');//tis is for view and we pass a parameter which acts as a medium for selection
//for add
Route::view('/addnew','add');
Route::post('/add',[YahooController::class,'add'])->name('add-show');
//for delete
Route::get('/delete/{id}',[YahooController::class,'delete'])->name('delete-show');
//for update
Route::get('/update/{id}',[YahooController::class,'update'])->name('update-show');
Route::post('/updateuser/{id}',[YahooController::class,'updateuser'])->name('updateuser-show');
require __DIR__.'/auth.php';
