<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\form;
use App\Http\Controllers\hasil;

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

Route::get('/', function () {
    //return view('welcome');
});

Route::get('/', [form::class,'index']);
Route::post('/inputan', [form::class,'store']);

Route::get('/view', [hasil::class,'index']);
Route::get('/edit/{id}', [hasil::class,'edit']);
Route::post('/update',[hasil::class,'update']);