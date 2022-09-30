<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RandomApiController;

Route::group(['prefix' => "v1"], function () {
    Route::get("/sorting/{string?}", [RandomApiController::class, 'sortString']);
    Route::get("/numplace/{num?}", [RandomApiController::class, 'numExplode']);
    Route::get("/numtobin/{string?}", [RandomApiController::class, 'numToBinary']);
    Route::get("/prefixnotation/{string?}", [RandomApiController::class, 'evalPrefix']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
