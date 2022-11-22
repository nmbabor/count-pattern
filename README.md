# Occurrences of a Pattern
A php program for find all occurrences of a pattern in a text.

## Program using php
 
 ```php

function countPattern($text, $pattern)
{
    $patternLength = strlen($pattern);
    $textLength = strlen($text);
    $matchPattern = 0;
    for ($i = 0; $i <= $textLength - $patternLength; $i++){
        for ($j = 0; $j < $patternLength; $j++)
            if ($text[$i+$j] != $pattern[$j])
                break;
        if ($j == $patternLength)
            $matchPattern++;
    }
    return $matchPattern;
}
echo countPattern('nmbabornm','nm');
```

## How it's work

- Firstly find the length of the text and pattern.
In above example here text length is 9 and pattern length is 2.
- Two loops are used here for pattern matching.
- Here the first loop will run 8 times. First loop index is the starting point of pattern match.
- Second loop will run 2 times. It will repeat with the first loop.
- When first loop index = 0 and second loop index = 0, it start checking from 1st character of text.If the first character matches, the second loop will continue.
 If the first character does not match, the second loop will break. 
 When second loop index will match with pattern length, this means the pattern is matched.
 
 ## Described by a table
 i | j | text[i+j] | patter[j] | res
 --- | --- | --- | --- | ---
 0 | 0 | n | n | 0
  . | 1 | m | m | 1
  1 | 0 | m | n | .
  2 | 0 | b | n | .
 3 | 0 | a | n | .
 4 | 0 | b | n | .
 5 | 0 | o | n | .
 7 | 0 | n | n | .
 . | 1 | m | m | 2
 