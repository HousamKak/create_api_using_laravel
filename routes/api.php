<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RandomApiController;

    //  Workshop material: 

    // Route::group(['prefix' => "v1"], function(){

    //     Route::group(['prefix' => "test"], function(){

    //         Route::group(['middleware' => "role.admin"], function(){
    //             Route::get("/users", [TestController::class, 'getUsers']);
    //         });

    //         Route::get("/hi/{age}/{name?}", [TestController::class, 'sayHi']);
    //         Route::post("/add_user", [TestController::class, 'addUser']);

    //     });

    //     Route::group(['prefix' => "client"], function(){

    //         Route::group(['middleware' => "role.admin"], function(){
    //             Route::get("/users", [TestController::class, 'getUsers']);
    //         });

    //         Route::get("/hi", [TestController::class, 'sayHi']);
    //     })6
;
// });
Route::get("/sorting/{string?}", [RandomApiController::class, 'sortString']);
Route::get("/numplace/{num?}", [RandomApiController::class, 'numExplode']);
Route::get("/numtobin/{num?}", [RandomApiController::class, 'numToBinary']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
