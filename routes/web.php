<?php

use Illuminate\Support\Facades\Route;

/*

*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('post/grid',  App\Http\Livewire\Post\Grid::class )->name('post.grid');
