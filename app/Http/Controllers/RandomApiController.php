<?php
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomApiController extends Controller
{
    // first API:
    // Create an API that receives a string consisting of lowercase letters,
    // uppercase letters and numbers and returns the string sorted (in a JSON object)
    function sortString($string = "6jnM31Q")
    {
        // Seperate numbers and letters
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
        // Find the sorted array
        $reindexed_numeric_array = [];
        foreach ($numeric_array as $numer) {
            array_push($reindexed_numeric_array, $numer);
        }

        // Change the letters into numbers 
        $letter_numerics = [];
        for ($i = 0; $i < count($letter_array); $i++) {
            array_push($letter_numerics, $this->lettersToNums($letter_array[$i]));
        };

        // Sort the transformed array
        asort($letter_numerics);
        // Find the sorted transformed array
        $reindexed_letter_numerics = [];
        foreach ($letter_numerics as $numer) {
            array_push($reindexed_letter_numerics, $numer);
        }

        // Inverting the numerics to letters
        $sorted_letters = [];
        for ($i = 0; $i < count($letter_numerics); $i++) {
            array_push($sorted_letters, $this->numsToLetters($reindexed_letter_numerics[$i]));
        };

        // Combine into one string
        $sorted_string = '';
        for ($i = 0; $i < count($sorted_letters); $i++) {
            $sorted_string .= $sorted_letters[$i];
        }
        for ($i = 0; $i < count($reindexed_numeric_array); $i++) {
            $sorted_string .= $reindexed_numeric_array[$i];
        }

        return response()->json([
            "status" => "Success",
            "sortedArray" => $sorted_string
        ]);
    }


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
        if ($num % 2 == 0) {
            return chr(($num - 2) / 2 + 65);
        } else {
            return chr(($num - 1) / 2 + 97);
        }
    }


    // The Second API:
    // Create an API that recives a number $num and returns each place value in the number.
    function numExplode($num = -434)
    {
        $places = [];
        if ($num < 0) {
            $sign = -1;
            $num = -$num;
        } else {
            $sign = 1;
        }

        $key_value = $num;
        $counter = 0;
        while ($key_value >= 1) {
            array_unshift($places, $sign * ($key_value - 10 * floor($key_value / 10)) * (10 ** $counter));
            $counter++;
            $key_value = floor($key_value / 10);
        }

        return response()->json([
            "status" => "Success",
            "Exploded View" => $places
        ]);
    }



    // The Third API:
    // "My father was born in 1974.10.25."
    function numToBinary($string = "My father was born in 1974.10.25.")
    {
        // Initialize an empty string that will follow with the initial string
        $new_string = "";
        // Initialize a counter that will reset every time we hit a new consequetive sequence of numbers
        $counter = 0;
        // Loop over the string
        for ($i = 1; $i < strlen($string)+1; $i++) {

            // Start checking each element for being a numeric
            // If a numeric hits we enter the logic
            if (is_numeric($string[$i - 1])) {
                if ($counter == 0) {
                    $num = '';
                }
                $counter++;
                $num .= $string[$i - 1];
                if (!is_numeric($string[$i])) {
                    $new_string .= $num;
                    // $this->makeBin($num);
                    $counter = 0;
                } else {
                    continue;
                }
            }
            // If we don't hit a numeric, we append the string to our new constructed string
            else {
                $new_string .= $string[$i - 1];
            }
        }

        return response()->json([
            "status" => "Success",
            "toBinary" => $new_string
        ]);
    }
    function makeBin($num)
    {
    }
}
