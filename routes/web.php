<?php

use App\Http\Controllers\home\HomeController;
use Illuminate\Support\Facades\Route;
 

Route::get('/home', [HomeController::class, 'home']);
