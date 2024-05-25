<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController; //добавить полный путь к контроллеру

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [MyPlaceController::class, 'index']); //задать контроллер как класс, с указанием метода