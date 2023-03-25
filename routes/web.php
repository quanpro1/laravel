<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('unicode',function(){
    return view('home');
});
Route::get('san-pham',function(){
    return view('product');
});
// Route::get('/',function(){
//       $html='<h1>hoc lap trinh</h1>';
// });
// Route::get('unicode',function(){
//       return view('form');
// });
// Route::post('unicode',function(){
//       return 'phuong thuc post cua path /unicode';
// });
// Route::put('unicode',function(){
//     return 'phuong thuc put cua path /unicode';
// });
// Route::delete('unicode',function(){
//     return 'phuong thuc delete cua path /unicode';
// });