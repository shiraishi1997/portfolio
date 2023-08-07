<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CsvDownloadController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
Route::get('/top',function(){
    return view('top.index');
    });
Route::get('/product/registar',[ProductController::class,'registar']);
Route::get('/customer',[CustomerController::class,'index']);
Route::get('/customer/{customer}',[CustomerController::class,'show']);
Route::get('/customer',[CustomerController::class,'index']);
Route::get('/product',[ProductController::class,'index']);
Route::get('/product/{product}',[ProductController::class,'show']);

Route::post('/product',[ProductController::class,'store']);
Route::get('/product/{product}/edit',[ProductController::class,'edit']);
Route::put('/product/{product}',[ProductController::class,'update']);
Route::get('/store/{store}',[StoreController::class,'view']);
Route::get('/store/registar',[StoreController::class,'registar']);
Route::post('/store',[StoreController::class,'store']);
Route::put('/order/{order}',[OrderController::class,'update']);
Route::get('/order',[OrderController::class,'index']);
Route::get('/order/{order}/edit',[OrderController::class,'edit']);
Route::get('/order/{order}',[OrderController::class,'show']);
Route::delete('/order/{order}',[OrderController::class,'delete']);
Route::get('/customer',[CustomerController::class,'index']);
Route::get('/csv',function(){
    return view('csv.csvdownloder');
});
Route::get('/csv-download', [CsvDownloadController::class, 'exportCsv']);
Route::post('/serchedexportCsv',[CsvDownloadController::class,'serchedexportCsv']);

});


require __DIR__.'/auth.php';
