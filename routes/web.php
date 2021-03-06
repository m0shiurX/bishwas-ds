<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\EntryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('products', ProductController::class);
Route::resource('agents', AgentController::class);
Route::resource('entries', EntryController::class);
