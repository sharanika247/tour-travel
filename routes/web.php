<?php

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
  /*Route::prefix('admin')->group(function(){ */

    Route::get('/', function () {
        return view('backend.pages.dashboard.admin');
    
    })->name('/');
    
    Route::get('/about', function () {
        return view('about');
    
    })->name('about');
    
    Route::get('/booking', function () {
        return view('backend.pages.dashboard.booking');
    
    })->name('booking.list');
    
    Route::get('/from', function () {
        return view('backend.pages.dashboard.basic from');
    
    })->name('basic.from');
    
    Route::get('/packages', function () {
        return view('backend.pages.dashboard.packages');
    
    })->name('package');
    
    Route::get('/all', function () {
        return view('backend.pages.dashboard.all');
    
    })->name('all.tour');
    
    Route::get('/long', function () {
        return view('backend.pages.dashboard.long');
    
    })->name('long.tour');
    
    Route::get('/short', function () {
        return view('backend.pages.dashboard.short');
    
    })->name('short.tour');
    

  //long
  Route::get('/long',[LongController::class,'add'])->name('long.tour');




  /*}); */