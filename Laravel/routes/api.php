<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensagensController;

Route::apiResource('mensagens', MensagensController::class);
