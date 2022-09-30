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
    //     })
;
// });
Route::get("/sorting/{array_string}", [RandomApiController::class, 'sortString']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
