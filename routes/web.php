<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Database;

Route::get('/',[Database::class, 'showDatabase'])->name('showproduct');
Route::get('/form', [Database::class, 'addDatabase']);
Route::post('/postform', [Database::class, 'PostDatabase']);
Route::get('/edit{id}',[Database::class,'getID']);
Route::post('/editform{id}', [Database::class,'edit']);
Route::get('/delete{id}', [Database::class, 'delete']);