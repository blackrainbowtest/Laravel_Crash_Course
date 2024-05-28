<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; //добавить полный путь к контроллеру

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index']); //задать контроллер как класс, с указанием метода