<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserSIgnUpController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login');
});
Route::get("/signup",function(){
    return view('signup');
});

Route::post('/users', [UserSignUpController::class, 'store']);
Route::post('/login',[UserSIgnUpController::class,'loginUser']);

Route::get('/information',[UserSIgnUpController::class,'show']);
Route::get('/update',[UserSIgnUpController::class,'updateForm']);
Route::post('/update',[UserSIgnUpController::class,'update']);
Route::delete('/delete',[UserSIgnUpController::class,'destroy']);

?>