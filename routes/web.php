<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserSIgnUpController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('signup');
});
Route::get("/login",function(){
    return view('login');
});

Route::post('/users', [UserSignUpController::class, 'store']);
Route::post('/login',[UserSIgnUpController::class,'loginUser']);
// Route::post('/login','UserSIgnUpController')->name('loginUser');



?>