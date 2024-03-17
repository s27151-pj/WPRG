<?php
function fibonacciSequence($number) {
    $fibonacciArrey = array();
    while count($fibonacciArrey) < $number;
    	$len = count($fibonacciArrey);
    	$newElement = $fibonacciArrey[$len-2] + $fibonacciArrey[$len-1]
        array_push($fibonacciArrey, $newElement);
        
    fibonacciSequence(10)
?>
