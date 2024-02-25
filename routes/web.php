<?php

use App\Livewire\Counter;
use app\Livewire\Caculator;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToolsController;

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
    return view('app');
});

Route::get('/counter', [ToolsController::class, 'counter'])->name('counter');
Route::get('/calculator', [ToolsController::class, 'calculator'])->name('calculator');
Route::get('/todo-list', [ToolsController::class, 'todo'])->name('todo-list');
Route::get('/cascading-dropdown', [ToolsController::class, 'cascadingDropdown'])->name('cascading-dropdown');
Route::get('/products', [ToolsController::class, 'products'])->name('products');
Route::get('/image-upload', [ToolsController::class, 'imageUpload'])->name('image-upload');
Route::get('/register', [ToolsController::class, 'register'])->name('register');

