<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\FirstTableController;

Route::get('/first-table', [FirstTableController::class, 'index']);
