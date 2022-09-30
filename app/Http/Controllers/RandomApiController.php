<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomApiController extends Controller{

    // For my learning:
    // I initialize a function with the usual syntax
    // I return a json object using:
    // return response()->json([
    //     "status" => "Success",
    //     "message" => $message
    // ]);

    //  I can initialize variables inside the function
    //  I can request data by inputting:
    // function functionName(Request $request){
    //         $name = $request->name;
    //         $age = $request->age;
    // }



    // workshop examples:

    // function getUsers(){
    //     return "HI From a Controller";
    // }


    // function sayHi($name = "Laravel"){
    //     $message = "HI " . $name;

    //     return response()->json([
    //         "status" => "Success",
    //         "message" => $message
    //     ]);
    // }

    // function addUser(Request $request){
    //     $name = $request->name;
    //     $age = $request->age;

    //     return response()->json([
    //         "status" => "Success",
    //         "message" => $age
    //     ]);
    // }


    
}
