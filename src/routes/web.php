<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;

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

Route::prefix('admin')->group(function() {
    Route::get('/login',[Authentication::class,'login'])->name('admin.login');
    Route::post('/login',[Authentication::class,'postLogin'])->name('admin.postlogin');

});


Route::get('test',function() {
    return view('admin.content.index');
});
