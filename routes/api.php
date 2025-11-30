<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ReservationController;

Route::apiResource('services', ServiceController::class);
Route::apiResource('reservations', ReservationController::class);