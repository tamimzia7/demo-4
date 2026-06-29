<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::view('/students', 'students');

Route::post('/students', [StudentsController::class, 'store']);
