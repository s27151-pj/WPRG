<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function printPrimes($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            echo $i . " ";
        }
    }
}

$start = 1;
$end = 100;
echo "Liczby pierwsze pomiedzy $start a $end to: ";
printPrimes($start, $end);
?>
