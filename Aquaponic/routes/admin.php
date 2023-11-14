<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware(['guest:admin'])->group(function(){
        Route::view('/login','back.pages.admin.auth.login')->name('login');
        Route::post('/login_handler',[AdminController::class,'loginHandler'])->name('login_handler');
    });

    Route::middleware(['auth:admin'])->group(function(){
        Route::view('/home','back.pages.admin.home')->name('home');
        Route::post('/logout_handler',[AdminController::class,'logoutHandler'])->name('logout_handler');
        Route::view('/analisis','back.pages.admin.analisis')->name('analisis');
        Route::view('/dashboard','back.pages.admin.dashboard')->name('dashboard');
        Route::view('/report','back.pages.admin.report')->name('report');
        Route::view('/device','back.pages.admin.device')->name('device');
        Route::view('/alert','back.pages.admin.alert')->name('alert');
        Route::view('/list','back.pages.admin.list')->name('list');
        Route::view('/treshold','back.pages.admin.treshold')->name('treshold');
        Route::view('/indicator','back.pages.admin.indicator')->name('indicator');
    });
});
