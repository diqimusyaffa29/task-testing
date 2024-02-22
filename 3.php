<?php

function traffcLight(array $lights){
    static $counter = 0;
    $q = $lights;
    $r = $q[$counter];
    echo $r ." ";
    ++$counter;
    if($counter == 3){
        return $counter = 0;
    };
}

$lights = ["Merah", "Kuning", "Hijau"];
traffcLight($lights);
traffcLight($lights);
traffcLight($lights);
traffcLight($lights);