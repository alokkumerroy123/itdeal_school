<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;

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

Route::get('/', function () {
    return redirect()->route('login');
});






Route::group(['as'=>'backend.','namespace'=>'Backend','middleware'=>['auth']], function() {
    Route::group(['prefix'=>'dashboard'],function(){
        Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');
    });



    Route::group(['as'=>'general.','prefix'=>'general'],function(){
        Route::get('/langauage/{lang}',[GeneralSettingController::class,'language'])->name('language');
    });


    Route::group(['as'=>'role.','prefix' => 'setting/role'], function() {
        Route::get('/index',[RoleController::class,'index'])->name('index');
        Route::get('/create',[RoleController::class,'create'])->name('create');
        Route::post('/store',[RoleController::class,'store'])->name('store');
        Route::get('/edit/{id}',[RoleController::class,'edit'])->name('edit');
        Route::get('/view/{id}',[RoleController::class,'view'])->name('view');
        Route::put('/update/{id}',[RoleController::class,'update'])->name('update');
        Route::delete('/destroy/{id}',[RoleController::class,'destroy'])->name('destroy');
        Route::get('/assign/{id}',[RoleController::class,'assign_create'])->name('assign.create');
        Route::post('/assign/{id}',[RoleController::class,'assign_store'])->name('assign.store');
    });

});






require __DIR__.'/auth.php';
