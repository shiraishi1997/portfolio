<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/store/{{store}}',[StoreController::class,'view']);
Route::get('/top',function()
{
    return view('top.index');
    
});
Route::get('/order/registar/{customer}',[CustomerController::class,'registar']);

Route::get('/product',[ProductController::class,'index']);
Route::get('/customer',[CustomerController::class,'index']);
Route::get('/product/{product}',[ProductController::class,'show']);
Route::get('/product/registar',[ProductController::class,'registar']);
Route::post('/product',[ProductController::class,'store']);
Route::get('/product/{product}/edit',[ProductController::class,'edit']);
Route::put('/product/{product}',[ProductController::class,'update']);

Route::get('/customer',[CustomerController::class,'index']);



require __DIR__.'/auth.php';