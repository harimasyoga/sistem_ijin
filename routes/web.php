<?php

use App\Http\Controllers\c_admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_home;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {
    return view('login',[
        "title"=>"Login",
        "cek"=>"0"
    ]);
});

Route::get('/', function () {
    return view('home',[
        "title"=>"Home",
        "user"=>"admin"
    ]);
});



Route::get('/cs_admin', function () {
    return view('cs',[
        "title"=>"Customer",
        "user"=>"admin"
    ]);
});


Route::get('/cs', function () {
    return view('cs',[
        "title"=>"Customer",
        "user"=>"cs"
    ]);
});


Route::post('/',[c_home::class,'store']);

Route::get('/admin',[c_admin::class,'index']);
