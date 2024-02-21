<?php

function findSameCharacters($words)
{
    $words = strtoupper($words);
    $size = strlen($words);
    // var_dump($size) . PHP_EOL;
    echo "Entered String is : {$words}" . PHP_EOL;
    
    for ($i = 0; $i < $size; $i++) {
        $count = 1;
        for ($j = $i + 1 ; $j < $size; $j++) {
            if ($words[$i] == $words[$j] && $words[$i] != " ") {
                $count++;
                $words[$j] = '0';
            }
        }
        if ($count > 1 && $words[$i] != '0') {
            // echo "$words[$i]" . PHP_EOL;
            echo "The Duplicated characters in the string are: {$words[$i]} 2x" . PHP_EOL;
        }
    }

    // $arr_chars = str_split($words);

}

(findSameCharacters("Strawberry"));
// var_dump(findSameCharacters("mantap jiwa jiwa"));
// echo(findSameCharacters("mantap jiwa")); -->
