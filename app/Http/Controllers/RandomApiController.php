<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomApiController extends Controller
{

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

    // $name = "Laravel"
    function sayHi()
    {
        $message = "HI";
        // . $name;

        return response()->json([
            "status" => "Success",
            "message" => $message
        ]);
    }

    // function addUser(Request $request){
    //     $name = $request->name;
    //     $age = $request->age;

    //     return response()->json([
    //         "status" => "Success",
    //         "message" => $age
    //     ]);
    // }

    function sortArray($string)
    {
        // Seperate letters and numbers
        $numeric_array = [];
        $upper_array = [];
        $lower_array = [];
        for ($x = 0; $x < strlen($string); $x++) {
            if (is_numeric($string[$x])) {
                array_push($numeric_array, $string[$x]);
            }

            // Seperate capital letters and small letters
            else if (ctype_upper($string[$x])) {

                array_push($upper_array, $string[$x]);
            } else {

                array_push($lower_array, $string[$x]);
            }
        };
        // sort the numbers
        asort($numeric_array);

        // sort the uppers
        asort($upper_array);

        // sort the lowers
        asort($lower_array);

        return response()->json([
            "status" => "Success",
            "sortedArray" => asort($array)
        ]);
    }
}
