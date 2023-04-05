<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::post('/info', [HomeController::class,'storeInfo'])->name('info');
Route::put('/admin/info/{id}',[HomeController::class,'update'])->name('admin.update');
Route::get('viewinfo',function(){
    return view('info');
})->name('viewinfo');

// Route::get('unicode',function(){
//     return view('home');
// });
Route::get('san-pham',function(){
    return view('product');
})->name('san-pham');
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('test1/{id}',function( Request $request, string $id){
    return 'User '.$id.''.$request->id ;
});
Route::get('/user/{name}', function (string $name) {
    return $name;
})->where('name', '[A-Za-z]+');

Route::middleware(['test:admin'])->group(function(){
    Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
    Route::get('/profile', function () {
        return 'abc';
    })->name('profile');
});
Route::controller(UserController::class)->group(function (){
   Route::get('/order/{id}', 'show');
   Route::get('/order', 'store');
});
Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
    Route::get('unicode',function(){
        return view('home');
    });
});
Route::resource('photos',PhotoController::class);


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