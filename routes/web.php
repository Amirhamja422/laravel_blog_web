<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

use PhpParser\Node\Stmt\Catch_;



Route::get('/', [CategoryController::class,'index'])->name('index');
Route::get('test', [CategoryController::class, 'tests'])->name('admin.category');
Route::get('create', [CategoryController::class, 'create'])->name('cat.category');
Route::post('store', [CategoryController::class, 'store'])->name('class.store');
Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('class.delete');
Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('class.edit');
Route::put('update/{id}', [CategoryController::class, 'update'])->name('class.update');