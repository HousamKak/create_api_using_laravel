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
    // function sayHi()
    // {
    //     $message = "HI";
    //     // . $name;

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

    function sortArray($string)
    {
        // Seperate letters and numbers
        $numeric_array = [];
        $letter_array = [];
        for ($x = 0; $x < strlen($string); $x++) {
            if (is_numeric($string[$x])) {
                array_push($numeric_array, $string[$x]);
            }

            // Seperate capital letters and small letters
            else {
                array_push($letter_array, $string[$x]);
            }
        };
        // sort the numbers
        asort($numeric_array);
        $uppers = range('A', 'Z');
        $lowers = range('a', 'z');
        for ($i = 0; $i < count($uppers); $i++) {

            print_r(lettersToNums($lowers[$i]));
            print_r("\n");
            print_r(lettersToNums($uppers[$i]));
            print_r("\n");
        };

        // lower are from 97 to 122, upper are from 65 to 90
        // idea is map 97->1 98->3 i.e. to the odds, and 65->2 66->4 i.e to the evens
        // input the letter to the mapping function, and it will output a number
        // sort the outputs and reverse the mapping

        function lettersToNums($letter)
        {
            $value = ord($letter);
            if ($value < 91) {
                return 2 * ($value - 65) + 2;
            } else {
                return 2 * ($value - 97) + 1;
            }
        }

        function numsToLetters($num)
        {
        }


        return response()->json([
            "status" => "Success",
            "sortedArray" => asort($array)
        ]);
    }
}
