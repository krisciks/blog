<?php 

$x = "Kaķēni";

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

dd($x);
dd(isset($x));

$y = $x ?? "Ups!";