<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UseController; 
use App\Http\Controllers\HelloController; 
use App\Http\Controllers\CelloController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('hello');
// });

Route::view('crud','main');

Route::get('crud',[UseController::class,'show']);
Route::post('crud',[UseController::class,'AddData']);



Route::get('/helo',function(){
 return view ('welcome');

});

Route::get('add',[HelloController::class,'addnum']);
Route::get('numm',[HelloController::class,'num']);


















