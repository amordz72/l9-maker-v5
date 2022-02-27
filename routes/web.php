<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Code\Project;
/*

*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('post/grid',  App\Http\Livewire\Post\Grid::class )->name('post.grid');


Route::prefix('code/project')->group(function () {
Route::get('/index',   Project\Index::class )->name('code.project.index');
Route::get('/create',   Project\Create::class )->name('code.project.create');
Route::get('/edit/{id}',   Project\Edit::class )->name('code.project.edit');
Route::get('/show/{id}',   Project\Show::class )->name('code.project.show');

});


