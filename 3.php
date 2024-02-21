<?php

class Light
{
    public $idx;
    public $lights = array("Merah", "Kuning", "Hijau");

    public function __construct()
    {
        $this->idx = 0;
    }

    public function idxIncrement()
    {
        $this->idx++;
        $r = $arr[idx]; //$arr[0]
    }

    public function getValue()
    {
        return $this->idx;
    }
};
$idx = new Light;
$idx->idxIncrement();




// function traffictLight(array $arr)
// {
//     $idx = 0;
    
//     $r = $arr[$idx]; //$arr[0]
//     echo $r . PHP_EOL;
//     // echo $arr[$idx];
//     $idx = $idx++ % count($arr);
//     $r = $arr[$idx]; //$arr[0]
// };

// $lights = array("Merah", "Kuning", "Hijau");
// echo count($lights) . PHP_EOL;
// traffictLight($lights);