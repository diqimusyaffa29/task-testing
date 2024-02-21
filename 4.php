<?php

function findSecondLargest(){
    $n = range(1,5);
    shuffle($n);
    sort($n);
    $r = implode(" ", $n);
    echo $r . PHP_EOL;
    $secondLargest = $n[sizeof($n)-2];
    $result = "The Second Largest Number is : {$secondLargest}". PHP_EOL;
    return $result;
}


echo(findSecondLargest());

