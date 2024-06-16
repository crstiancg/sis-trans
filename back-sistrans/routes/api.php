<?php

use App\Http\Controllers\UbigeoController;
use Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/ubigeos', UbigeoController::class)->middleware([HandlePrecognitiveRequests::class]);
