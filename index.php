<?php
// A php program for find all occurrences of a pattern in a text.
function countPattern($text, $pattern)
{
    $patternLength = strlen($pattern);
    $textLength = strlen($text);
    $matchPattern = 0;
 
    /*
        - loop for matching charecter one by one.
        - first loop length = text length - patternt length + 1
    */
    for ($i = 0; $i <= $textLength - $patternLength; $i++){
        /*
            second loop for patter one by one start by index i
        */
        for ($j = 0; $j < $patternLength; $j++){
            if ($text[$i+$j] != $pattern[$j])
                break;
        }
            
        // if text[i+j] == patter[j] & end the length of pattern 
        if ($j == $patternLength){
            $matchPattern++;
        }
    }

    $result = "Text: ".$text. "<br> Pattern: ".$pattern."<br>". $matchPattern ." matches were found.";
    return $result;
}

echo countPattern('nmbabornm','nm');

// function patternFind($text, $pattern) {
//     $count = 0;
//     $patternLen = strlen($pattern);
//     $text_len = strlen($text);
//     for ($i = 0; $i <= $text_len - $patternLen; $i++) {
//         if (substr($text, $i, $patternLen) == $pattern) {
//             $count++;
//         }
//     }
//     return $count;
// }
