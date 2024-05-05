<?php

function factorialRecursive($n) {
    if ($n <= 1) return 1;
    return $n * factorialRecursive($n - 1);
}

function fibonacciRecursive($n) {
    if ($n <= 0) return 0;
    if ($n == 1) return 1;
    return fibonacciRecursive($n - 1) + fibonacciRecursive($n - 2);
}

function factorialIterative($n) {
    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

function fibonacciIterative($n) {
    $a = 0;
    $b = 1;
    for ($i = 0; $i < $n; $i++) {
        $temp = $a;
        $a = $b;
        $b = $temp + $b;
    }
    return $a;
}

//http://localhost/myprojects/WPRG_projects/zjazd3/Zad2/index.php?number=5


$number = isset($_GET['number']) ? (int) $_GET['number'] : null;

if ($number === null || $number < 0) {
    echo "Proszę podać poprawny, dodatni numer w Query String. Przykład: ?number=5";
    exit;
}

echo "<h2>Wyniki dla liczby: $number</h2>";

$start = microtime(true);
$recursiveFactorial = factorialRecursive($number);
$timeRecursiveFactorial = microtime(true) - $start;
echo "Silnia rekurencyjnie: $recursiveFactorial (czas: $timeRecursiveFactorial sekund)<br>";

$start = microtime(true);
$iterativeFactorial = factorialIterative($number);
$timeIterativeFactorial = microtime(true) - $start;
echo "Silnia iteracyjnie: $iterativeFactorial (czas: $timeIterativeFactorial sekund)<br>";

$start = microtime(true);
$recursiveFibonacci = fibonacciRecursive($number);
$timeRecursiveFibonacci = microtime(true) - $start;
echo "Fibonacci rekurencyjnie: $recursiveFibonacci (czas: $timeRecursiveFibonacci sekund)<br>";

$start = microtime(true);
$iterativeFibonacci = fibonacciIterative($number);
$timeIterativeFibonacci = microtime(true) - $start;
echo "Fibonacci iteracyjnie: $iterativeFibonacci (czas: $timeIterativeFibonacci sekund)<br>";
