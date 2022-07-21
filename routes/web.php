<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
 
//Route::get('/', function () {
//    return view('welcome');
//});
 
Route::get('/', [MemberController::class, 'index']);
Route::get('/search',[MemberController::class, 'search']);
Route::get('/member/{id}',[MemberController::class, 'viewmember']);
Route::post('/find',[MemberController::class, 'find']);