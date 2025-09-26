<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlleruser;

Route::get('/', [App\Http\Controllers\controlleruser::class, 'index']); 

Route::get('/users', [App\Http\Controllers\controlleruser::class, 'index'])->name('users.index');

Route::get('/users/create', [App\Http\Controllers\controlleruser::class, 'create'])->name('users.create');

Route::post('/users', [App\Http\Controllers\controlleruser::class, 'store'])->name('users.store');

Route::get('/users/{user}', [App\Http\Controllers\controlleruser::class, 'show'])->name('users.show');

Route::get('/users/{user}/edit', [App\Http\Controllers\controlleruser::class, 'edit'])->name('users.edit');


Route::put('/users/{user}', [App\Http\Controllers\controlleruser::class, 'update'])->name('users.update');

Route::delete('/users/{user}', [App\Http\Controllers\controlleruser::class, 'destroy'])->name('users.destroy');