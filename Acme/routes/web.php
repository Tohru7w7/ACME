<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlueprintController;

Route::get('/', function () {
    return view('admin.dashboard');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::group(['prefix'=>'dashboard'],function(){
    Route::get("/",function(){
        return view('admin.dashboard');
    });
    Route::get("/blueprint",[BlueprintController::class,'getBlueprint']);
    Route::post("/blueprint",[BlueprintController::class,'createBlueprint']);

});
