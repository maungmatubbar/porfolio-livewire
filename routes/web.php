<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserContoller;
use App\Http\Controllers\WorkController;
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
Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/posts',[PostController::class,'index'])->middleware(['auth', 'verified'])->name('post.index');
Route::get('/post-create',[PostController::class,'create'])->middleware(['auth', 'verified'])->name('post.create');
Route::get('/users',[UserContoller::class,'index'])->middleware(['auth', 'verified'])->name('user.index');
Route::get('/works',[WorkController::class,'index'])->middleware(['auth', 'verified'])->name('work.index');


//Route::get('dashboard',function (){
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
