<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContainerUpdateController;

//Auth::routes();

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('site.index');
Route::resource('container_updates', ContainerUpdateController::class);