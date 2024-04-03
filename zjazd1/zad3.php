<?php

function fibonacci($n) {
    $sequence = [0, 1];
    for ($i = 2; $i <= $n; $i++) {
        $sequence[$i] = $sequence[$i - 1] + $sequence[$i - 2];
    }
    return $sequence;
}

function printOdd($sequence) {
    $number = 1;
    foreach ($sequence as $element) {
        if ($element % 2 != 0) {
            echo $number . "; " . $element . "\n";
            $number++;
        }
    }
}

$n = 10;
$sequence = fibonacci($n);
printOdd($sequence);

?>
