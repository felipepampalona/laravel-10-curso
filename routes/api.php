<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\SupportController;

Route::apiResource('supports', SupportController::class);
