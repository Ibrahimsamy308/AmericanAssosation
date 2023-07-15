<?php

use App\Http\Controllers\DataUserController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('import-excel',[DataUserController::class,'importexcel'])->name('import-excel');
Route::get('/upload', function () {
    return view('uploadfile');
});

Route::post('update_pay/{id}',[DataUserController::class,'updatepayment'])->name('update_pay');


// Route::get('showdata', function () {
//     return view('showdata');
// });

