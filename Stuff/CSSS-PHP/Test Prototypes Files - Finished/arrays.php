<?php

function printArr($someArr)
{
    echo $someArr[0]." big whole <br/>";
    echo $someArr[1]."!";
}


$arr = array();

$arr[0] = "Hello";
$arr[1] = "World";

printArr($arr);

?>